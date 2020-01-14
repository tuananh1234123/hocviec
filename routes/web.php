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


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
/*
..
manage permistion
...
*/
Route::middleware(['role:admin'])->group(function (){
Route::get('/permistion/views',
['as'=>'permistion.views',
'uses'=>'PermistionController@views']);

Route::get('/permistion/create',
['as'=>'permistion.create', 
'uses'=>'PermistionController@create']);

Route::post('/permistion/create',
['as'=>'permistion.doCreate',
'uses'=>'PermistionController@doCreate']);

Route::post('/permistion/update',
['as'=>'permistion.update',
'uses'=>'PermistionController@update']);

Route::get('/permistion/delete/{id}',
['as'=>'permistion.delete',
'uses'=>'PermistionController@delete']);
});
/*
..
manage role
...
*/ 
Route::get('/role',
['as'=>'role.views',
'uses'=>'roleController@views'])->middleware('role:admin');

Route::get('/role/create',
['as'=>'role.create',
'uses'=>'roleController@create']);

Route::post('/role/create',
['as'=>'role.doCreate',
'uses'=>'roleController@doCreate']);

Route::get('/role/update/{id}',
['as'=>'role.update',
'uses'=>'roleController@goUpdate']);

Route::post('/role/update/{id}',
['as'=>'role.doUpdate',
'uses'=>'roleController@update']);

Route::get('/role/delete/{id}',
['as'=>'role.delete',
'uses'=>'roleController@delete']);
/*
..
manage user
...
*/
Route::get('/user',
['as'=>'user.views',
'uses'=>'UserController@views']);

Route::get('/user/create',
['as'=>'user.create',
'uses'=>'UserController@goCreate']);

Route::post('/user/create',
['as'=>'user.doCreate',
'uses'=>'UserController@doCreate']);

Route::get('/user/update/{id}',
['as'=>'user.goUpdate',
'uses'=>'UserController@goUpdate']);

Route::post('/user/update/{id}',
['as'=>'user.update',
'uses'=>'UserController@update']);

Route::get('/user/delete/{id}',
['as'=>'user.delete',
'uses'=>'UserController@delete']);
/*
..
History user activity
...
*/
Route::get('/history',
['as'=>'user.history',
'uses'=>'HistoryController@views']);
/*
..
Error
...
*/
Route::get('/error',
['as'=>'user.error',
'uses'=>'ErrorController@index']);
/*
test
*/
Route::get('/test',
['as'=>'test',
'uses'=>'testController@views']);
Route::get('/testAjax',
['as'=>'test.ajax',
'uses'=>'testController@ajax']);
Route::get('/api',
['as'=>'test.api',  
'uses'=>'testController@api']);
Route::get('/testData',
['as'=>'test.data',  
'uses'=>'testController@getData']);