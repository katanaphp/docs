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

            $blade->directive('vite', function (string $expression) {
                return "<?php vite({$expression});?>";
            });
        }

        return $blade->render($view, $data);
    }
}


function vite(string ...$names): void
{
    static $isFirstCall = true;

    if (is_string($names)) {
        $names = [$names];
    }

    if (isProduction()) {
        $manifestPath = ROOT_DIR . '/dist/.vite/manifest.json';

        if (!file_exists($manifestPath)) {
            throw new \RuntimeException('Vite manifest file not found: ' . $manifestPath);
        }

        $manifest = json_decode(file_get_contents($manifestPath), true);

        foreach ($names as $name) {
            if (!isset($manifest[$name])) {
                throw new \InvalidArgumentException("Asset '$name' not found in Vite manifest.");
            }

            $asset = $manifest[$name];

            $fileName = $asset['file'] ?? $asset;

            if (str_ends_with($fileName, 'css')) {
                echo "<link rel='stylesheet' href='/{$fileName}'>";
            } else {
                echo "<script src='/{$fileName}'></script>";
            }
        }
    } else {
        if ($isFirstCall) {
            echo '<script type="module" src="http://localhost:5173/@vite/client"></script>';
        }

        foreach ($names as $name) {
            if (str_ends_with($name, 'css')) {
                echo "<link rel='stylesheet' href='http://localhost:5173/{$name}'>";
            } else {
                echo "<script src='http://localhost:5173/{$name}'></script>";
            }
        }
    }

    $isFirstCall = false;
}


function isProduction(): bool
{
    return php_sapi_name() === 'cli';
}
