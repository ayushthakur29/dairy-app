<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

// })->name('products');
Route::get('/products', [ProductsController::class, 'products'])->name('products');;

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');
Route::get('/Milk', function () {
    return view('Milk');
})->name('Milk');

Route::get('/features', function () {
    return view('features');
})->name('features');
Route::get('/Dahi', function () {
    return view('Dahi');
})->name('Dahi');

Route::get('/team', function () {
    return view('team');
})->name('team');
Route::get('/Paneer', function () {
    return view('Paneer');
})->name('Paneer');

Route::get('/testimonials', function () {
    return view('testimonials');
})->name('testimonials');
Route::get('/Butter', function () {
    return view('Butter');
})->name('Butter');

Route::get('/IceCream', function () {
    return view('IceCream');
})->name('IceCream');

Route::get('/Lassi', function () {
    return view('Lassi');
})->name('Lassi');

Route::get('/Lassi', function () {
    return view('Lassi');
})->name('Lassi');

Route::get('/IceCream', function () {
    return view('IceCream');
})->name('IceCream');

Route::get('/Butter', function () {
    return view('Butter');
})->name('Butter');

Route::get('/Ghee', function () {
    return view('Ghee');
})->name('Ghee');

Route::get('/404', function () {
    return view('404');
})->name('page404');

Route::get('/contact', function () {
return view('contact');
})->name('contact');


Route::get('/layout', function () {
    return view('app');
})->name('layout');
