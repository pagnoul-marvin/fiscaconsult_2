<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'generate:sitemap';
    protected $description = 'Génère le sitemap XML pour le site';

    public function handle()
    {
        Sitemap::create()
            ->add(Url::create(config('app.url')))
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap généré avec succès.');
    }
}
