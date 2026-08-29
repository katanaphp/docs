@props(['link' => '', 'variant' => 'secondary'])
@php
    $tag = empty($link) ? 'button' : 'a';
    $class = match ($variant) {
        'primary' => [
            'bg-primary text-white',
            'hover:bg-primary-dark'
        ],
        'secondary' => [
            'border border-light',
            'hover:bg-lightest'
        ],
        default => '',
    };

    $class = is_string($class) ? [$class] : $class;
@endphp

<{{ $tag }} {{ $attributes->class([
    'px-6 py-3 rounded-lg font-semibold transition-all',
    'hover:shadow-lg',
    ...$class
]) }} @if($link) href="{{ $link }}" @endif>
    {{ $slot }}
</{{ $tag }}>