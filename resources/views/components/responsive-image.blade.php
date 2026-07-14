@props([
    'name',
    'alt',
    'width',
    'height',
    'class' => 'img_container_img',
    'sizes' => '(max-width: 920px) 100vw, 50vw',
    'loading' => 'lazy',
    'fetchpriority' => null,
    'widths' => [400, 800, 1200],
    'eager' => false,
])

@php
    $basePath = 'assets/images/optimized/'.$name;
    $availableWidths = collect($widths)->filter(function (int $w) use ($basePath) {
        return file_exists(public_path("{$basePath}-{$w}.webp"));
    })->values();

    if ($availableWidths->isEmpty()) {
        $availableWidths = collect($widths);
    }

    $defaultWidth = $availableWidths->first();

    $srcset = $availableWidths
        ->map(fn (int $w) => asset("{$basePath}-{$w}.webp").' '.$w.'w')
        ->implode(', ');
@endphp

<img
    {{ $attributes->merge(['class' => $class]) }}
    src="{{ asset("{$basePath}-{$defaultWidth}.webp") }}"
    @if($srcset) srcset="{{ $srcset }}" @endif
    sizes="{{ $sizes }}"
    alt="{{ $alt }}"
    width="{{ $width }}"
    height="{{ $height }}"
    @if($eager) fetchpriority="{{ $fetchpriority ?? 'high' }}" @elseif($loading) loading="{{ $loading }}" @endif
    @if($fetchpriority && ! $eager) fetchpriority="{{ $fetchpriority }}" @endif
/>
