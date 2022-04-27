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

    $comic = config('comics');

    return view('home', ['fumetti' => $comic]);
})->name('home');

Route::get('fumetti/{fumetti_id}', function ($fumetti_id) {

    $comic = config('comics');

    if (is_numeric($fumetti_id) && $fumetti_id >= 0 && $fumetti_id < count($comic)) {
        $fumetto = $comic[$fumetti_id];
        return view('fumetto', ['fumetto' => $fumetto]);
    } else {
        abort(404, 'Error');
    }

})->name('fumetti');
