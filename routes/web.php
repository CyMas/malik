<?php

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
    return view('home');

});
Route::get('login','Auth\LoginController@getLogin');
Route::post('login','Auth\LoginController@postLogin');
Route::get('logout','Auth\LoginController@getLogout');


Route::get('about', 'FurnitureController@about');
Route::get('blog', 'FurnitureController@blog');
Route::get('kontak', 'FurnitureController@kontak');

Route::get('pesan/detail/{id}', 'FurnitureController@detailpesan');


Route::get('datapesanan', 'FurnitureController@datapesanan');
Route::get('databarang', 'FurnitureController@databarang');
Route::get('inputbarang', 'FurnitureController@inputbarang');
Route::get('admin/home', 'FurnitureController@homeadmin');
Route::get('admin/detail/{id}', 'FurnitureController@detailadmin');
Route::get('admin/detailpesanan/{id}', 'FurnitureController@detailpesanan');
Route::get('pesanfurniture', 'FurnitureController@pesanfurniture');

Route::get('admin/deleter/{id}', 'ProsesController@deleter');
Route::get('admin/deletep/{id}', 'ProsesController@deletep');
Route::get('pesanfurniture', 'FurnitureController@pesanfurniture');
Route::get('listfurniture', 'FurnitureController@listfurniture');
Route::get('admin/editr/{id}', 'FurnitureController@editbarang');

Route::POST('ruangtamu', 'ProsesController@ruangtamu');
Route::POST('pesanbarang', 'ProsesController@pesanbarang');
Route::post('admin/edit/{id}', 'ProsesController@edit');
Auth::routes();

Route::get('/home', 'HomeController@index');
