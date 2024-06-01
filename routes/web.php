<?php

use App\Http\Controllers\HomeControler;
use App\Http\Controllers\PropertyController;
use App\Models\Agent;
use Illuminate\Support\Facades\Route;
use App\Models\Property;

Route::get('/', [HomeControler::class, 'home'])->name('page.home');
Route::get('/property/{id}', [PropertyController::class, 'show'])->name('page.property.show');
Route::get('/service', [HomeControler::class, 'service'])->name('page.service');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('about');
})->name('about');

Route::get('/', function () {
    $property = Property::all();

    $agents = Agent::take(3)->get();
    return view('home', compact('agents', 'property'));
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
