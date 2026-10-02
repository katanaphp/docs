<x-layout>
    <main>
        <x-section>
            <x-container class="prose px-4">
                <h1>Releases</h1>

                @foreach ($releaseNotes as $note)
                    <ol>
                        <li>
                            <a href=" {{ $note['path'] }}">
                                {{ $note['document']->title }}
                            </a>
                        </li>
                    </ol>
                @endforeach
            </x-container>
        </x-section>
    </main>
</x-layout>