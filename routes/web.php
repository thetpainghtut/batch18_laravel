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

Route::get('/', 'MainController@welcome')->name('homepage');

Route::get('testing', 'MainController@testing')->name('testingpage');

Route::get('about', 'MainController@about')->name('aboutpage');

Route::get('contact', 'MainController@contact')->name('contactpage');

// CRUD Process
Route::resource('brand', 'BrandController'); // 7 (get, post, put, delete)

Route::resource('category', 'CategoryController'); // 7 

Route::resource('subcategory', 'SubcategoryController'); // 7 

Route::resource('item', 'ItemController'); // 7 

