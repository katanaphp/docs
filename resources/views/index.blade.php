@php
    $links = [
        [
            'label' => 'GitHub',
            'link' => 'https://github.com/katanaphp/blade',
        ]
    ];
@endphp
<x-layout class="max-w-full!" title="Katana">
    <header class="border-b">
        <x-container class="py-4 flex justify-between prose">
            <a href="/" class="font-bold">Katana</a>
            <div class="flex gap-4">
                @foreach ($links as $link)
                    <a href="{{ $link['link'] }}">
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </div>
        </x-container>
    </header>

    <x-section class="text-center">
        <x-container class="prose prose-h1:text-5xl prose-h1:lg:text-7xl max-w-3xl! space-y-6!">
            <h1>
                Render Blade in any <span class="text-[#474A8A]">PHP</span> project
            </h1>
            <p class="lead">
                Katana is an independent implementation of the Blade template language which enables you to use your
                favourite template language in any PHP projects, without dependencies on Laravel.
            </p>
            <div class="flex gap-4 justify-center">
                <!-- <x-button variant="primary">Get started</x-button> -->
                <x-button link="https://github.com/katanaphp/blade">View on GitHub</x-button>
            </div>
        </x-container>
    </x-section>
</x-layout>