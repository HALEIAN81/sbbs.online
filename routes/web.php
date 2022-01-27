<?php

use Illuminate\Support\Facades\Route;
use App\Models\Domain;

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

Route::get('/', 'SiteController@sitepost');


Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::post("domain/store", "DomainController@store");


require __DIR__.'/auth.php';
