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

Route::get('/news', fn() => view("news"));

Route::get('/news/{id}', fn($id) => view("newsid", ["id" => $id]));

Route::get('/other', fn() => redirect("/news"));

Route::get('/404', fn() => abort(404));
