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
    return view('welcome');
});

Route::get('/home', \App\Http\Livewire\Pages\Home::class)->name('site.home');
Route::get('/over-ons', \App\Http\Livewire\Pages\About::class)->name('site.about');
Route::get('/services', \App\Http\Livewire\Pages\Services::class)->name('site.services');
Route::get('/contact', \App\Http\Livewire\Pages\Contact::class)->name('site.contact');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
