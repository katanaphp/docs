<?php

namespace App\Commands;

use App\Route;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;

#[AsCommand('build:generate-html')]
class GenerateStaticHTML extends Command
{

    public function __invoke(): int
    {
        $outputDir = ROOT_DIR . '/dist';

        if (!is_dir($outputDir) && !mkdir($outputDir)) {
            return Command::FAILURE;
        }

        $routes = Route::all();


        foreach ($routes as $url => $callback) {
            $path = $url;
            if ($path === '/' || empty($path)) {
                $path = 'index.html';
            }

            $filePath = sprintf("%s/%s", $outputDir, $path);

            file_put_contents($filePath, $callback());
        }


        return Command::SUCCESS;
    }
}
