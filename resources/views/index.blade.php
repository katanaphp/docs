@php
    $links = [
        [
            'label' => 'GitHub',
            'link' => 'https://github.com/katanaphp/blade',
        ]
    ];
@endphp
<x-layout class="max-w-full!" title="Katana">


    <x-section class="bg-brand-50">
        <x-container class="text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-brand-900 leading-tight tracking-tight">
                Portable blade templates<br>in any PHP project
            </h1>
            <p class="mt-6 text-lg md:text-xl text-brand-500 max-w-2xl mx-auto leading-relaxed">
                Katana is an independent implementation of the Blade template language, bringing you the comfort of
                Blade templates in any PHP project.
            </p>
            <div class="mt-10 flex items-center justify-center gap-4 flex-wrap">
                {{-- <a href="https://katanaphp.dev/docs"
                    class="inline-flex items-center px-6 py-3 bg-brand-900 text-white text-sm font-medium rounded-lg hover:bg-brand-800 transition-colors">
                    <x-icon icon="book" class="mr-4" />View Documentation
                </a> --}}
                <a href="https://github.com/katanaphp"
                    class="inline-flex items-center px-6 py-3 border border-brand-300 text-brand-700 text-sm font-medium rounded-lg hover:bg-brand-100 transition-colors">
                    <x-icon type="brands" icon="github" class="mr-4 w-4.5" />View on GitHub
                </a>
            </div>
        </x-container>
    </x-section>

    <x-section>
        <x-container>
            <h2 class="text-3xl font-bold text-brand-900 text-center tracking-tight">Why choose Katana?</h2>
            <p class="mt-4 text-brand-500 text-center max-w-xl mx-auto">Everything you need to adopt Blade outside of
                Laravel.</p>

            <div class="mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $features = [
                        [
                            'icon' => [
                                'type' => 'solid',
                                'icon' => 'circle-check',
                            ],
                            'title' => 'Wide PHP Support',
                            'description' => 'Supports all PHP 8.x versions used on approximately 77% of all deployments, making it easier to adopt in both new and legacy projects.'
                        ],
                        [
                            'icon' => [
                                'type' => 'solid',
                                'icon' => 'flask'
                            ],
                            'title' => 'Extensively Tested',
                            'description' => 'Large test suite with end-to-end tests verifying actual HTML output at 95% coverage.',
                        ],
                        [
                            'icon' => [
                                'type' => 'solid',
                                'icon' => 'feather',
                            ],
                            'title' => 'Light weight',
                            'description' => 'A lightweight, fully independent implementation of Blade with zero dependencies on Laravel.'
                        ],
                        [
                            'icon' => [
                                'type' => 'solid',
                                'icon' => 'code',
                            ],
                            'title' => 'Full Laravel Parity',
                            'description' => 'Same directives, components, and interface as Laravel Blade so you can port code to and from Laravel effortlessly.'
                        ],
                        [
                            'icon' => [
                                'type' => 'solid',
                                'icon' => 'shield-halved',
                            ],
                            'title' => 'Actively Maintained',
                            'description' => 'The only independent Blade implementation actively maintained as of 2025.'
                        ],
                        [
                            'icon' => [
                                'type' => 'solid',
                                'icon' => 'bolt'
                            ],
                            'title' => 'Blade Anywhere',
                            'description' => '  Use Blade with CakePHP, WordPress, SlimPHP, or CodeIgnite; modernize legacy projects and improve developer experience without Laravel.'
                        ]

                    ];
                @endphp

                @foreach ($features as $feature)
                    <div class="border border-brand-200 rounded-xl p-7 hover:border-brand-300 transition-colors bg-white">
                        <div class="w-10 h-10 text-white bg-brand-900 rounded-lg flex items-center justify-center mb-5">
                            <x-icon :icon="$feature['icon']['icon']" :type="$feature['icon']['type']" />
                        </div>
                        <h3 class="text-lg font-semibold text-brand-900">{{$feature['title']}}</h3>
                        <p class="mt-2 text-sm text-brand-500 leading-relaxed">{{ $feature['description'] }}</p>
                    </div>
                @endforeach
            </div>

            <div class="mt-8 text-center">
                <a href="https://www.zend.com/blog/php-migration-trends" target="_blank" rel="noopener noreferrer"
                    class="text-xs text-brand-400 hover:text-brand-600 transition-colors underline underline-offset-2">
                    Source: PHP Migration Trends —Zend
                </a>
            </div>
        </x-container>
    </x-section>

    <x-section class="bg-brand-50">
        <x-container class="text-center">
            <h2 class="text-3xl font-bold text-brand-900 tracking-tight">Ready to use Blade anywhere?</h2>
            <p class="mt-4 text-brand-500 max-w-lg mx-auto">Start building with modern, expressive templates in your
                existing PHP project today.</p>
            <div class="mt-8 flex items-center justify-center gap-4 flex-wrap">
                {{-- <a href="https://katanaphp.dev/docs"
                    class="inline-flex items-center px-6 py-3 bg-brand-900 text-white text-sm font-medium rounded-lg hover:bg-brand-800 transition-colors">
                    <x-icon type="solid" icon="book" class="mr-3" />View Documentation
                </a> --}}
                <a href="https://github.com/katanaphp"
                    class="inline-flex items-center px-6 py-3 border border-brand-300 text-brand-700 text-sm font-medium rounded-lg hover:bg-brand-100 transition-colors">
                    <x-icon type="brands" icon="github" class="mr-3" />View on GitHub
                </a>
            </div>
        </x-container>
    </x-section>

</x-layout>