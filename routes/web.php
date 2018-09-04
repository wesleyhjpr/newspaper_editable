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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::match(['get', 'post'], '/', function(){
    return redirect('/page1');
});
Route::get('/page1', ['uses' => 'PageController@index']);
Route::post('page/update/{id}', ['as' => 'page/update', 'uses' => 'PageController@update']);
