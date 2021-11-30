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

Route::get('/welcome', function () {
    return view('welcome');
});

// TOPページを表示するルーティング
Route::get('/', function(){
    return view('main.index');
});

//addtodoを表示するルーティング
Route::get('addtodo', function(){
    return view('main.addtodo');
});
//viewtasksを表示するルーティング
Route::get('viewtasks', function(){
    return view('main.viewtasks');
});
//addbookを表示するルーティング
Route::get('addbook', function(){
    return view('main.addbook');
});
//viewresultを表示するルーティング
Route::get('viewstatus', function(){
    return view('main.viewstatus');
});


//期限切れ対応
Route::get('/', 'TaskController@checkTheDate');

// addtodoを新規登録するため
Route::get('addtodo', 'TaskController@add');
Route::post('addtodo', 'TaskController@create');

//addbookで本を新規登録するため
Route::get('addbook', 'BookController@add');
Route::post('addbook', 'BookController@create');

//本の一覧を表示させる
Route::get('viewbooks','BookController@viewbooks');
//本を削除する
Route::get('bookdelete', 'BookController@deletebook');

//viewall一覧表示
Route::get('viewall', 'TaskController@check');
//
Route::get('viewtasks', 'TaskController@index');
//
Route::get('viewstatus', 'TaskController@status');
//Route::post('viewtasks', 'MainController@viewpost');

//understand_idでタスクを表示する
Route::get('viewunderstand', 'TaskController@understand');

//削除
Route::post('delete/{id}/', 'TaskController@delete');

//更新
Route::get('edit', 'TaskController@edit');
Route::post('update', 'TaskController@update');
