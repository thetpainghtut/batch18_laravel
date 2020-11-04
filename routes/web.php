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
// using frontend_asset (ui)
// Route::get('/', 'MainController@welcome')->name('homepage');
// Route::get('testing', 'MainController@testing')->name('testingpage');
// Route::get('about', 'MainController@about')->name('aboutpage');
// Route::get('contact', 'MainController@contact')->name('contactpage');

// CRUD Process (Item Management)
Route::resource('brand', 'BrandController'); // 7 (get, post, put, delete)
Route::resource('category', 'CategoryController'); // 7 
Route::resource('subcategory', 'SubcategoryController'); // 7 
Route::resource('item', 'ItemController'); // 7 
Route::post('filter', 'ItemController@filterCategory')->name('filterCategory');

// Frontend with items
Route::get('/', 'FrontendController@home')->name('mainpage');

Route::get('itemdetail/{id}', 'FrontendController@itemdetail')->name('itemdetail');

Route::get('signin', 'FrontendController@signin')->name('signinpage');
Route::get('signup', 'FrontendController@signup')->name('signuppage');

Route::resource('user', 'UserController');

Auth::routes(['register'=>false]); //

Route::get('/home', 'HomeController@index')->name('home');