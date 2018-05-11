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

Route::get('/', 'TestController@getIndex');
Auth::routes();
Route::get('/', 'ProductController@getIndex');
Route::get('/breads','ProductController@getTypeOne');
Route::get('/threads','ProductController@getTypeTwo');
Route::get('/search','SearchController@getSearch');
Route::get('products/{id}', 'ProductController@getProduct');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/comment', 'CommentController@Index');
Route::post('/comment/add','CommentController@postIndex');
/*Route::get('/basket','BasketController@Index');*/
//Route::get('products/{id}', 'ProductController@Showall');
Route::post('menu','AjaxController@getPost');
Route::get('/basket','BasketController@Index');
Route::post('/basket','BasketController@postIndex');
//Route::post('products/{id}/getmsg','AjaxController@index');
Route::get('basket/delete/{id}','BasketController@getDelete');
Route::post('/order', 'AjaxController@send');
Route::get('{id}', 'BaseController@getStatic');// Всегда ставится последним