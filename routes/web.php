<?php

use Illuminate\Support\Facades\Route;
use App\Models\Domain;
use App\Http\LiveWire\Domains;

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

Route::get('advanced', function () {
    return view('advanced');
})->middleware(['auth'])->name('advanced');

Route::get('/advanced/{domain}', 'DomainController@edit')->middleware(['auth']);

Route::get('account', "DomainController@domainList")->middleware(['auth'])->name('account');

Route::get('/premiumdomains', 'DomainController@premiumDomainList');

Route::get('/inventory', 'DomainController@index');

Route::get('/details', 'DomainController@details');

Route::get('/premiumapps', 'DomainController@premiumAppList');

Route::get('/information', 'DomainController@information');

Route::get('/domain/{domain}', 'DomainController@show');

Route::post("domain/store", "DomainController@store")->middleware(['auth']);

Route::post("domain/update/{domain}", "DomainController@update")->middleware(['auth']);

require __DIR__.'/auth.php';
