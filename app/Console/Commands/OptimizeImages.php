<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class OptimizeImages extends Command
{
    protected $signature = 'images:optimize-images';
    protected $description = 'Optimize and resize JPEG images in public/assets/images/normal';

    public function handle(): void
    {
        $sourcePath = public_path('assets/images/normal');
        $destinationPath = public_path('assets/images/optimized');

        if (!File::exists($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true);
        }

        $manager = new ImageManager(new Driver());
        $files = File::files($sourcePath);

        foreach ($files as $file) {
            $extension = strtolower($file->getExtension());
            if (!in_array($extension, ['png', 'jpeg', 'jpg'])) {
                continue;
            }

            $img = $manager->read($file->getPathname());
            $filename = $file->getFilename();

            if (str_contains($filename, 'ITAA_logo')) {
                $targetWidth = 300;
            } elseif (str_contains($filename, 'nathalie') || str_contains($filename, 'olivier') || str_contains($filename, 'expertise') || str_contains($filename, 'office.png') || str_contains($filename, 'mission') || str_contains($filename, 'team')) {
                $targetWidth = 500;
            } elseif (str_contains($filename, 'office_4')) {
                $targetWidth = 700;
            } elseif (str_contains($filename, 'oli_nath_office') || str_contains($filename, 'office_3')) {
                $targetWidth = 800;
            }

            $img->scale(width: $targetWidth);

            $filenameWithoutExt = pathinfo($filename, PATHINFO_FILENAME);
            $webpFilename = $filenameWithoutExt . '.webp';
            $webpPath = $destinationPath . '/' . $webpFilename;

            $img->toWebp(quality: 100)->save($webpPath);

            $this->info("✔ Optimisé : $webpFilename");
        }

        $this->info('✅ Toutes les images ont été compressées et redimensionnées.');
    }
}
