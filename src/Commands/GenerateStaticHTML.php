<?php

namespace App\Commands;

use App\Route;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand('build:generate-html')]
class GenerateStaticHTML extends Command
{

    public function __invoke(OutputInterface $output): int
    {
        $outputDir = ROOT_DIR . '/dist';

        if (!is_dir($outputDir) && !mkdir($outputDir)) {
            return Command::FAILURE;
        }

        $routes = Route::all();


        foreach ($routes as $url => $callback) {
            $path = $url;

            $subDirectory = sprintf("%s/%s", $outputDir, $path);

            if (!is_dir($subDirectory) && !mkdir($subDirectory, recursive: true)) {
                $output->write('Unable to create sub directories');
                return Command::FAILURE;
            }

            file_put_contents("{$subDirectory}/index.html", $callback());
        }


        return Command::SUCCESS;
    }
}
