<?php

use Illuminate\Support\Facades\Route;
use App\Models\Property;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    $property = Property::all();
    return $property;
});

// Route::get('/about', function () {
//     return view('1.about', ['name' => 'Muqi Gewa']);
// });

// Route::get('/blog', function () {
//     return view('1.blog');
// });

// Route::get('/contact', function () {
//     return view('1.contact');
// });

// Route::get('/home', function () {
//     return view('1.home');
// });

///////////////////////////////////////////////////////////////
// tester
Route::get('/app', function () {
    return view('layouts.app');
});


// Tugas

Route::get('/about', function () {
    return view('property.about');
});

Route::get('/contact', function () {
    return view('property.contact');
});

// Route::get('/home', function () {
//     return view('home', [
//         "tagline" => "Easiest way to find your dream home",
//         "popular" => "Popular Properties ",
//     ]);
// });

Route::get('/properties', function () {
    return view('property.properties');
});

Route::get('/property', function () {
    return view('property.property');
});

Route::get('/services', function () {
    return view('property.services');
});
