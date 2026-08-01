@props(['type' => 'solid', 'icon'])
@php
    $iconsDir = ROOT_DIR . '/node_modules/@fortawesome/fontawesome-free/svgs';

@endphp

<span {{ $attributes->class(['inline-block w-4 *:fill-current']) }}>
    @php echo file_get_contents("{$iconsDir}/{$type}/{$icon}.svg"); @endphp
</span>