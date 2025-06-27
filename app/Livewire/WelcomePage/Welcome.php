<?php

namespace App\Livewire\WelcomePage;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Welcome extends Component
{
    public function mount(): void
    {
        Cache::remember('team_images_webp', 60 * 24, function () {
            $path = public_path('assets/images/optimized');
            return collect(File::files($path))
                ->filter(fn ($file) => in_array($file->getExtension(), ['webp']))
                ->map(fn ($file) => 'assets/images/optimized/' . $file->getFilename())
                ->values()
                ->toArray();
        });
    }
    public function render()
    {
        return view('livewire.welcome-page.welcome');
    }
}
