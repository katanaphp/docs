<?php

use App\Commands\GenerateStaticHTML;
use Symfony\Component\Console\Application;

$console = new Application();


$console->addCommand(new GenerateStaticHTML);
