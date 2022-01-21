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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('user-form', Users::class)->name('user-form');

//Route::get("addmore", "PremiumDomainsController@addmore");
Route::post("domain/store", "DomainController@store");


/*artcse example*/

// Route::get( 'about', 'HomeController@index');
// Route::get( 'contact', 'ContactController@contact');

// Route::get( 'users', 'UserController@index');
// Route::get( 'create-user', 'UserController@create');
// Route::get( 'users/{id}', 'UserController@show');
// Route::get( 'users/{id}/delete', 'UserController@delete');
// Route::get( 'users/{id}/edit', 'UserController@edit');

require __DIR__.'/auth.php';
