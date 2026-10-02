@props(['title'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    @vite('resources/css/app.css', 'resources/js/app.ts')

</head>

<body {{ $attributes }}>
    <nav class="w-full border-b border-brand-200 bg-white">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="/" class="text-xl font-bold text-brand-900 tracking-tight">Katana</a>
            <div class="flex items-center gap-6">
                <a href="/releases"
                    class="text-sm text-brand-500 hover:text-brand-900 transition-colors">Releases</a>
                <a href="https://katanaphp.dev/docs"
                    class="text-sm text-brand-500 hover:text-brand-900 transition-colors">Docs</a>
                <a href="https://github.com/katanaphp"
                    class="text-sm text-brand-500 hover:text-brand-900 transition-colors">
                    <x-icon type="brands" icon="github" class="mr-1" /> GitHub
                </a>
            </div>
        </div>
    </nav>

    {{ $slot }}


    <footer class="border-t border-brand-200 bg-white py-8">
        <div class="max-w-6xl mx-auto px-6 flex items-center justify-between text-sm text-brand-400">
            <span>Katana &copy; {{date('Y')}}</span>
            <a href="https://github.com/katanaphp" class="hover:text-brand-900 transition-colors">
                <x-icon type="brands" icon="github" />
            </a>
        </div>
    </footer>
</body>

</html>