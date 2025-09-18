<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
return view('home');
})->name('home');   // Naming '/' route as 'home'

Route::get('/about', function () {
return view('about');
})->name('about');

Route::get('/services', function () {
return view('services');
})->name('services');

Route::get('/products', function () {
     return view('products');
})->name('products');


Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');


Route::get('/features', function () {
    return view('features');
})->name('features');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/testimonials', function () {
    return view('testimonials');
})->name('testimonials');

Route::get('/404', function () {
    return view('404');
})->name('page404');

Route::get('/contact', function () {
return view('contact');
})->name('contact');


Route::get('/layout', function () {
    return view('app');
})->name('layout');

Route::get('/Milk', function () {
    return view('Milk');
})->name('Milk');

Route::get('/Dahi', function () {
    return view('Dahi');
})->name('Dahi');

Route::get('/Paneer', function () {
    return view('paneer');
})->name('Paneer');

Route::get('/Butter', function () {
    return view('Butter');
})->name('Butter');


Route::get('/buttermilk', function () {
    return view('buttermilk');
})->name('buttermilk');

Route::get('/Ghee', function () {
    return view('Ghee');
})->name('Ghee');



