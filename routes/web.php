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

Route::get('/', 'StanzaController@index') -> name('stanza-index');
Route::get('/stanza/{id}', 'StanzaController@show') -> name('stanza_show');

Route::get('/create/stanze', 'StanzaController@create') -> name('stanza_create');
Route::post('/create/stanze', 'StanzaController@store') -> name('stanza_store');
