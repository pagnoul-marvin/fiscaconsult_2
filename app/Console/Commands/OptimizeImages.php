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

            if (!in_array($extension, ['jpg', 'jpeg'])) {
                continue;
            }

            $img = $manager->read($file->getPathname());

            $img->scale(width: 600);

            $filename = $file->getFilename();
            $optimizedPath = $destinationPath . '/' . $filename;

            $img->toJpeg(quality: 80)->save($optimizedPath);

            $this->info("✔ Optimisé : $filename");
        }

        $this->info('✅ Toutes les images ont été compressées et redimensionnées.');
    }
}
