<?php

use Blade\Blade;

if (!function_exists('view')) {
    function view(string $view, array $data = []): Stringable
    {
        static $blade = null;

        if ($blade === null) {
            $blade = new Blade(VIEW_DIR, CACHE_DIR);
            $blade->setEnvironment(function () {
                return php_sapi_name() === 'cli' ? 'production' : 'development';
            });
        }

        return $blade->render($view, $data);
    }
}


if (!function_exists('vite')) {
    function vite(string $name): string
    {
        $manifestPath = ROOT_DIR . '/dist/.vite/manifest.json';

        if (!file_exists($manifestPath)) {
            throw new \RuntimeException('Vite manifest file not found: ' . $manifestPath);
        }

        $manifest = json_decode(file_get_contents($manifestPath), true);

        if (!isset($manifest[$name])) {
            throw new \InvalidArgumentException("Asset '$name' not found in Vite manifest.");
        }

        $asset = $manifest[$name];

        // Handle both file and src keys depending on Vite version/output format
        $fileName = $asset['file'] ?? $asset;

        return  "/$fileName";
    }
}
