<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $contentHome = [
        'titolo' => 'Hello World',
        'sottotitolo' => 'Alla scoperta di Laravel',
        'paragrafo' => 'Here is where you can register web routes for your application. These
                        | routes are loaded by the RouteServiceProvider within a group which
                        | contains the "web" middleware group. Now create something great!'

    ];
    return view('home', $contentHome);
    
})->name('homepage');

Route::get('/su_di_noi', function () {
    return view('su_di_noi');
})->name('noi');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('lavori');

Route::get('/contatti', function () {
    return view('contatti');
})->name('indirizzo');