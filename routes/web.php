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
// FRONTEND 
Route::get('/', 'HomeController@index');
Route::get('/trang-chu', 'HomeController@index');

// BACKEND
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::get('/logOutAdmin', 'AdminController@logOut');
Route::post('admin-dashboard', 'AdminController@dashboard');

// Category Product 
Route::get('/add-category-product', 'CategoryProduct@addCategory');
Route::get('/all-category-product', 'CategoryProduct@allCategory');
Route::post('/save-category-product', 'CategoryProduct@saveCategory');

