<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/profile', function () {
    return view('profile', [
        'nom' => 'Nassiri Ilyas',
        'metter' => 'Formateur Développement Web'
    ]);
})->name('profile');

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/status', function () {
    return view('status');
})->name('status');

Route::get('/stagiaires', function () {
    $stagiaires = ["Ali", "Sara", "Omar", "Khadija"];
    return view('stagiaires', ['stagiaires' => $stagiaires]);
})->name('stagiaires');

Route::get('/home-old', function () {
    return view('Home');
});
