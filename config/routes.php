<?php

use App\Document;
use App\Route;


$releaseNotes = glob(ROOT_DIR . "/resources/content/release-notes/*.md");
$releaseNotes = array_map(function (string $path) {
    $fileName = pathinfo($path, PATHINFO_FILENAME);

    $document = new Document(file_get_contents($path));

    return [
        'name' => $fileName,
        'path' => "/releases/{$fileName}",
        'document' => $document,

    ];
}, $releaseNotes);


Route::get('/', fn() => view('index'));
Route::get('/releases', fn() => view('releases', ['releaseNotes' => $releaseNotes]));
array_walk(
    $releaseNotes,
    fn(array $notes) => Route::get(
        $notes['path'],
        fn() => view('document', ['document' => $notes['document']])
    )
);
