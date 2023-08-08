<?php

namespace App\Http\Controllers;

use App\Models\BeritaDesa;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreBeritaDesaRequest;
use App\Http\Requests\UpdateBeritaDesaRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class BeritaDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = BeritaDesa::all();

        return view('pages.admin.berita-desa')->with([
            'beritaDesa' => $data
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        if ($query == '' || $query == null) {

            return view('pages.user.berita-desa')->with([
                'beritaDesa' => BeritaDesa::all()
            ]);
        } else {

            $berita = BeritaDesa::whereRaw('LOWER(judul) LIKE ?', ['%' . strtolower($query) . '%'])->get();

            return view('pages.user.berita-desa')->with([
                'beritaDesa' => $berita
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.berita-desa.tambah-data-berita-desa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBeritaDesaRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'judul_berita' => 'required',
            'slug' => 'required',
            'isi_berita' => 'required',
            'img_berita' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $beritaDesa = new BeritaDesa();

        if ($request->hasFile('img_berita')) {
            $imgBeritaDesa = $request->file('img_berita');
            $imgName = time() . '.' . $imgBeritaDesa->getClientOriginalExtension();
            $imgBeritaDesa->move(public_path('berita-desa'), $imgName);

            $beritaDesa->judul = $request->input('judul_berita');
            $beritaDesa->slug = $request->input('slug');
            $beritaDesa->excerpt = strip_tags(Str::limit($request->isi_berita, 200));
            $beritaDesa->body = $request->input('isi_berita');
            $beritaDesa->img_berita = $imgName;

            $beritaDesa->save();

            Session::flash('success');

            return redirect()->back();
        } else {
            $beritaDesa->judul = $request->input('judul_berita');
            $beritaDesa->slug = $request->input('slug');
            $beritaDesa->excerpt = strip_tags(Str::limit($request->isi_berita, 200));
            $beritaDesa->body = $request->input('isi_berita');
            $beritaDesa->img_berita = '';

            $beritaDesa->save();

            Session::flash('success');

            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(BeritaDesa $beritaDesa)
    {
        $data = BeritaDesa::latest()->get();

        return view('pages.user.berita-desa')->with([
            'beritaDesa' => $data
        ]);
    }

    public function showBerita($slug)
    {
        $data = BeritaDesa::where('slug', $slug)->first();

        return view('pages.user.detail-berita')->with([
            'beritaDesa' => $data
        ]);
    }

    public function detail($slug)
    {
        $data = BeritaDesa::where('slug', $slug)->first();

        return view('pages.admin.berita-desa.tampil-data-berita-desa')->with([
            'beritaDesa' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = BeritaDesa::findOrFail($id);

        return view('pages.admin.berita-desa.edit-data-berita-desa')->with([
            'beritaDesa' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBeritaDesaRequest $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul_berita' => 'required',
            'slug' => 'required',
            'isi_berita' => 'required',
            'img_berita' => 'image|mimes:jpeg,png,jpg,gif|max:1024'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $beritaDesa = BeritaDesa::findOrFail($id);

        if ($request->hasFile('img_berita')) {
            $fotoBerita = $request->file('img_berita');
            $imgName = time() . '.' . $fotoBerita->getClientOriginalExtension();
            $fotoBerita->move(public_path('berita-desa'), $imgName);

            $path = public_path('berita-desa/') . $beritaDesa->img_berita;
            File::delete($path);

            $beritaDesa->judul = $request->input('judul_berita');
            $beritaDesa->slug = $request->input('slug');
            $beritaDesa->excerpt = strip_tags(Str::limit($request->isi_berita, 150));
            $beritaDesa->body = $request->input('isi_berita');
            $beritaDesa->img_berita = $imgName;

            $beritaDesa->save();

            Session::flash('success');

            return redirect()->back();
        } else {
            $beritaDesa->judul = $request->input('judul_berita');
            $beritaDesa->slug = $request->input('slug');
            $beritaDesa->excerpt = strip_tags(Str::limit($request->isi_berita, 150));
            $beritaDesa->body = $request->input('isi_berita');
            $beritaDesa->img_berita = $beritaDesa->img_berita;

            $beritaDesa->save();

            Session::flash('success');

            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $beritaDesa = BeritaDesa::findOrFail($id);

        $path = public_path('berita-desa/') . $beritaDesa->img_berita;
        File::delete($path);

        $beritaDesa->delete();

        Session::flash('success');

        return redirect()->back();
    }

    public function getSlug(Request $request)
    {
        $slug = SlugService::createSlug(BeritaDesa::class, 'slug', $request->judul);

        return response()->json([
            'slug' => $slug
        ]);
    }
}
