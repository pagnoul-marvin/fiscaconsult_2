<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'generate:sitemap';

    protected $description = 'Génère le sitemap XML pour le site';

    public function handle(): int
    {
        $baseUrl = rtrim(config('site.url'), '/');

        $sitemap = Sitemap::create()
            ->add(Url::create($baseUrl)->setPriority(1.0))
            ->add(Url::create("{$baseUrl}/a-propos")->setPriority(0.9))
            ->add(Url::create("{$baseUrl}/contact")->setPriority(0.9))
            ->add(Url::create("{$baseUrl}/mentions-legales")->setPriority(0.3));

        $images = [
            'office_3-800.webp',
            'nathalie-500.webp',
            'team-500.webp',
        ];

        foreach ($images as $image) {
            $sitemap->add(
                Url::create($baseUrl)
                    ->addImage("{$baseUrl}/assets/images/optimized/{$image}")
            );
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap généré avec succès.');

        return self::SUCCESS;
    }
}
