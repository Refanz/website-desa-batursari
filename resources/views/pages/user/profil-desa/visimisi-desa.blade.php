@extends('layouts.app')

@section('title', 'Desa Batursari | Visi Misi Desa')

@section('content')

<h4 class="fw-bold">VISI DAN MISI DESA BATURSARI</h4>

<div class="text-center">
    <img class="mt-2" src="{{ asset('assets/images/visi-misi.png') }}" alt="" width="300px">
</div>

<div class="visi-misi-desa">
    <div class="visi-desa">
        <h5 class="text-center mt-3">VISI DESA</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa maxime possimus dolore officiis voluptas ipsum repellendus optio? Harum veritatis nobis pariatur corrupti cum culpa, natus neque, sit animi rem ad.</p>
    </div>
    <div class="misi-desa p-0">
        <h5 class="text-center mt-4">MISI DESA</h5>
        <ol type="1">
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi praesentium ad molestias a magni! Officiis distinctio quam molestiae, necessitatibus pariatur dolores perferendis dolorum cumque, laborum repellat, consectetur saepe quae velit.</li>
            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non nihil molestias consectetur adipisci quaerat, quibusdam at totam consequatur amet doloremque voluptatem tempora distinctio, quae maxime voluptate explicabo! Quia, blanditiis nisi?</li>
            <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis numquam beatae quas architecto magni ipsam illo ut eos dolorum ipsa odio earum eaque natus sed, dolor ex quasi aut dicta.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et quisquam facilis asperiores, nesciunt dolores expedita est ratione iusto, fuga odit odio consequuntur totam, ut sint possimus ex velit nemo culpa.</li>
        </ol>
    </div>
</div>

@endsection
