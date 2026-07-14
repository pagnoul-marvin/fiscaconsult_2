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
        $lastModified = now();

        $homeUrl = Url::create($baseUrl)
            ->setPriority(1.0)
            ->setLastModificationDate($lastModified);

        foreach (['office_3-800.webp', 'nathalie-500.webp', 'team-500.webp'] as $image) {
            $homeUrl->addImage("{$baseUrl}/assets/images/optimized/{$image}");
        }

        $sitemap = Sitemap::create()
            ->add($homeUrl)
            ->add(
                Url::create("{$baseUrl}/a-propos")
                    ->setPriority(0.9)
                    ->setLastModificationDate($lastModified)
            )
            ->add(
                Url::create("{$baseUrl}/contact")
                    ->setPriority(0.9)
                    ->setLastModificationDate($lastModified)
            )
            ->add(
                Url::create("{$baseUrl}/mentions-legales")
                    ->setPriority(0.3)
                    ->setLastModificationDate($lastModified)
            );

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap généré avec succès.');

        return self::SUCCESS;
    }
}
