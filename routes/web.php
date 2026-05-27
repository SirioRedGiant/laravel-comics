<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('comics');
    return view('home', compact('comics'));
})->name('home');


Route::get('/movies', function () {
    // tutti i dati dal file config
    $allComics = config('comics');

    // filtro tenendo conto solo degli elementi che hanno come tipo "graphic novel" visto che solitamente vengono usati per creare film
    $movies = array_filter($allComics, function ($item) {
        return $item['type'] === 'graphic novel';
    });

    // dati filtrati alla vista movies
    return view('movies', compact('movies'));
})->name('movies');


Route::get('/characters', function () {
    $allComics = config('comics');
    $artists = [];

    // creo un array di artisti ciclando sui fumetti
    foreach ($allComics as $comic) {
        $artists = array_merge($artists, $comic['artists']);
    }

    // rimozione dei duplicati alcuni compaiono più volte, così rimarranno una sola volta
    $artists = array_unique($artists);

    return view('characters', compact('artists'));
})->name('characters');
