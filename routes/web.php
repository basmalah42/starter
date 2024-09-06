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
    // return view('welcome')-> with(['name'=>'basmalah' , 'age'=>24]);
    // return view('welcome');
//    $data=[];
//    $data['age']=24;
//    $data['name']='basmalah';
//    return view('welcome' , $data);
 return 'home bage';
});

// Route::get('index' , 'Front\UsersController@getIndex');

// Route::get('/test1', function () {
//     return 'welcome';
// }) -> name('a');
// Route::get('/test2/{id}', function ($id) {
//     return $id;
// });
// Route::get('/test3/{id?}', function () {
//     return view('test_file');
// });

// Route::get('/landing', function () {
//     return view('landing');
// });
// Route::get('about', function () {
//     return view('about');
// });
// // Route::get('second', 'Admin\SecondController@showString');

// // Route::group(['namespace'=>'Admin' ,] , function(){
// //     Route::get('second0', 'SecondController@showString0') ->middleware('auth');
// //     Route::get('second1', 'SecondController@showString1');
// //     Route::get('second2', 'SecondController@showString2');
// //     Route::get('second3', 'SecondController@showString3');
// // });
// Route::group(['namespace'=>'Admin' ,] , function(){
//     Route::get('second0', 'SecondController@showString0');
//     Route::get('second1', 'SecondController@showString1');
//     Route::get('second2', 'SecondController@showString2');
//     Route::get('second3', 'SecondController@showString3');
// });


// Route::resource('news','NewsController');

// Route::get('login' , function(){
//     return 'you must frist login';
// }) -> name('login');



Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home') -> middleware('verified');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
