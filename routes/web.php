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

Route::get('locale/{locale}','App\Http\Controllers\LocalizationController')->name('locale');

Route::middleware(['locale'])->group(function () {
    Route::get('test', function (){
        abort(403, 'Unauthorized action.');
    });



    Route::get('/', \App\Http\Livewire\Pages\Home::class)->name('site.home');
    Route::get('/over-ons', \App\Http\Livewire\Pages\About::class)->name('site.about');
    Route::get('/services', \App\Http\Livewire\Pages\Services::class)->name('site.services');
    Route::get('/contact', \App\Http\Livewire\Pages\Contact::class)->name('site.contact');
    Route::get('/calamiteiten', \App\Http\Livewire\Pages\Calamities::class)->name('site.calamities');
    Route::get('/technisch-beheer', \App\Http\Livewire\Pages\PropertyManagement::class)->name('site.property-management');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
