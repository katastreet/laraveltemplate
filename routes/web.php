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
//returns corresponding template
// Route::get('/', function () {
//     return view('welcome');
// });
//ID/ only doesn't work ID/2 works
Route::get('ID/{id}',function($id){
    echo 'ID: '.$id;
});
// optional i.e user/ and user/ram can both be used
Route::get('user/{name?}',function($name='default'){
    echo 'Name: '.$name;
});
// middleware with Controller
Route::get('role',[
    'middleware' => 'Role:editor',
    'uses' => 'TestController@index',
]);
//middle with controller for middleware with handle and terminate(new)
//middleware corresponds to middleware in kernel.php
Route::get('terminate',[
    'middleware' => 'terminate',
    'uses' => 'ABCController@index',
]);

Route::get('/',function(){
    return view('home');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::post('/contact/submit', 'MessagesController@submit');

Route::get('/messages','MessagesController@getMessages');
