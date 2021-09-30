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

//// Route of home page and related data 
Route::get('/', function () {
    $data = [
        'to_do_list' => [
            'Fare il bucato',
            'Fare la spesa',
            'Comprare il pane'
        ],
        'nav_bar' => [
            'home' => 'Home',
            'who_we_are' => 'Chi siamo',
            'products' => 'I nostri prodotti',
            'contacts' => 'I nostri contatti'
        ]
    ];
    return view('home', $data);
})->name('home');

//// Route of the page 'who we are'
Route::get('/chi_siamo', function () {
    return view('who_we_are');
})->name('who_we_are');

//// Route of the page 'products'
Route::get('/i_nostri_prodotti', function () {
    return view('products');
})->name('products');

//// Route of the page 'contacts'
Route::get('/i_nostri_contatti', function () {
    return view('contacts');
})->name('contacts');
