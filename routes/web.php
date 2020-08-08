<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'AccueilController@index');
Route::get('/services', 'ServiceController@index');
Route::get('/blog', 'BlogController@index');
Route::get('/contact', 'ContactController@index');

Route::resource('accueil', 'AccueilController');
Route::resource('service', 'ServiceController');
Route::resource('servicesprimes', 'ServicesprimesController');
Route::resource('blog', 'BlogController');
Route::resource('slogan', 'SloganController');
Route::resource('banniere', 'BanniereController');
Route::resource('presentation', 'PresentationController');
Route::resource('video', 'VideoController');
Route::resource('titretestimonials', 'TitreTestimonialsController');
Route::resource('testimonials', 'TestimonialController');
Route::resource('titreservices', 'TitreServiceController');
Route::resource('titreteams', 'TitreTeamsController');
Route::resource('teamfixed', 'TeamfixedController');
Route::resource('team', 'TeamController');
Route::resource('ready', 'ReadyController');
Route::resource('contact', 'ContactController');


Route::get('admin/accueil', 'AccueilController@edit')->name('adminaccueil');
Route::get('admin/services', 'ServiceController@edit');


Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
