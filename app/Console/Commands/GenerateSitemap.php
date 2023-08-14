<?php

namespace App\Console\Commands;

use App\Models\BeritaDesa;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $beritaDesaSitemap = Sitemap::create();

        BeritaDesa::get()->each(function (BeritaDesa $beritaDesa) use ($beritaDesaSitemap) {
            $beritaDesaSitemap->add(
                Url::create("/berita-desa/{$beritaDesa->slug}")
                    ->setPriority(0.9)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            );
        });

        $beritaDesaSitemap->writeToFile(public_path('sitemap.xml'));
    }
}
