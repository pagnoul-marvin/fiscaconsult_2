<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class OptimizeImages extends Command
{
    protected $signature = 'images:optimize-images';

    protected $description = 'Optimize and resize images in public/assets/images/normal to responsive WebP variants';

    /** @var array<int> */
    private array $defaultWidths = [400, 800, 1200];

    public function handle(): int
    {
        $sourcePath = public_path('assets/images/normal');
        $destinationPath = public_path('assets/images/optimized');

        if (! File::exists($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true);
        }

        $manager = new ImageManager(new Driver);
        $files = File::files($sourcePath);

        foreach ($files as $file) {
            $extension = strtolower($file->getExtension());
            if (! in_array($extension, ['png', 'jpeg', 'jpg'], true)) {
                continue;
            }

            $filename = $file->getFilename();
            $filenameWithoutExt = pathinfo($filename, PATHINFO_FILENAME);
            $maxWidth = $this->resolveMaxWidth($filename);

            $sourceImage = $manager->read($file->getPathname());
            $sourceWidth = $sourceImage->width();
            $effectiveMax = min($maxWidth, $sourceWidth);

            $widthsToGenerate = $this->resolveWidthsForFile($filename, $effectiveMax);

            foreach ($widthsToGenerate->unique()->sort() as $targetWidth) {
                $img = $manager->read($file->getPathname());
                $img->scale(width: $targetWidth);

                $webpFilename = "{$filenameWithoutExt}-{$targetWidth}.webp";
                $webpPath = $destinationPath.'/'.$webpFilename;

                $img->toWebp(quality: 80)->save($webpPath);

                $this->info("✔ {$webpFilename}");
            }
        }

        $this->cleanLegacyWebp($destinationPath);

        $this->info('Toutes les images ont été compressées et redimensionnées.');

        return self::SUCCESS;
    }

    /** @return Collection<int, int> */
    private function resolveWidthsForFile(string $filename, int $effectiveMax): Collection
    {
        $widths = str_contains($filename, 'office_3')
            ? [400, 600, 800]
            : $this->defaultWidths;

        $widthsToGenerate = collect($widths)
            ->filter(fn (int $w) => $w <= $effectiveMax)
            ->values();

        if ($widthsToGenerate->isEmpty()) {
            $widthsToGenerate = collect([$effectiveMax]);
        } elseif (! $widthsToGenerate->contains($effectiveMax)) {
            $widthsToGenerate->push($effectiveMax);
        }

        return $widthsToGenerate;
    }

    private function resolveMaxWidth(string $filename): int
    {
        if (str_contains($filename, 'ITAA_logo')) {
            return 300;
        }

        if (str_contains($filename, 'nathalie') || str_contains($filename, 'olivier') || str_contains($filename, 'expertise') || str_contains($filename, 'office.png') || str_contains($filename, 'mission') || str_contains($filename, 'team')) {
            return 500;
        }

        if (str_contains($filename, 'office_4')) {
            return 700;
        }

        if (str_contains($filename, 'oli_nath_office') || str_contains($filename, 'office_3')) {
            return 800;
        }

        return 1200;
    }

    private function cleanLegacyWebp(string $destinationPath): void
    {
        foreach (File::files($destinationPath) as $file) {
            $name = $file->getFilename();
            if (preg_match('/\.webp$/', $name) && ! preg_match('/-\d+\.webp$/', $name)) {
                File::delete($file->getPathname());
                $this->warn("Supprimé (ancien format) : {$name}");
            }
        }
    }
}
