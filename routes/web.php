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

Route::get('login', 'HomeController@index');
Route::post('login', 'HomeController@login');
Route::get('roles', 'HomeController@roles');
Route::get('logout', 'HomeController@logout');
Route::get('home', 'HomeController@viewHome')->middleware('isLoggedIn');
Route::get('change_password', 'HomeController@viewChangePassword')->middleware('isLoggedIn');
Route::post('change_password', 'HomeController@changePassword')->middleware('isLoggedIn');
Route::get('add_user', 'UserController@addView')->middleware('isLoggedIn');
Route::get('users', 'UserController@index')->middleware('isLoggedIn');
Route::get('user/edit/{id}', 'UserController@edit')->middleware('isLoggedIn');
Route::post('user/update/{id}', 'UserController@update')->middleware('isLoggedIn');
Route::post('add_user', 'UserController@store')->middleware('isLoggedIn');
Route::post('check_email', 'UserController@checkEmail')->middleware('isLoggedIn');


Route::get('manage_categories', 'CategoryController@manageCategories')->middleware('isLoggedIn');
Route::post('add_category', 'CategoryController@addCategory')->middleware('isLoggedIn');
Route::get('category/delete/{id}', 'CategoryController@deleteCategory')->middleware('isLoggedIn');
Route::get('category/edit/{id}', 'CategoryController@editCategory')->middleware('isLoggedIn');
Route::post('category/edit/{id}', 'CategoryController@updateCategory')->middleware('isLoggedIn');


Route::get('add_product', 'ProductController@addProduct')->middleware('isLoggedIn');
Route::post('add_product', 'ProductController@createProduct')->middleware('isLoggedIn');
Route::get('view_products', 'ProductController@viewProducts')->middleware('isLoggedIn');
Route::get('product/delete/{id}', 'ProductController@deleteProduct')->middleware('isLoggedIn');
Route::get('product/edit/{id}', 'ProductController@editProduct')->middleware('isLoggedIn');
Route::post('product/edit/{id}', 'ProductController@updateProduct')->middleware('isLoggedIn');