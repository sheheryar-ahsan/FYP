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
    return view('news');
});
Route::get('/help_form', function () {
    return view('help_form');
});
Route::get('/vs_table', function () {
    return view('vs_table');
});
Route::get('/cpu_table', function () {
    return view('cpu_table');
});
Route::get('/gpu_table', function () {
    return view('gpu_table');
});
Route::get('/cpu_form', function () {
    return view('cpu_form');
});
Route::get('/login', function () {
    return view('login');
});
// Route::get('/bug_forum', function () {
//     return view('bug_forum');
// });

Route::get('/signup','SignupController@sign');
Route::post('/login','SignupController@insert');
Route::get('/read','SignupController@fech');
Route::post('/submit','SignupController@login');
Route::post('/cpu_submit','AdminController@cpu_insert');
Route::post('/gpu_submit','AdminController@gpu_insert');
Route::get('/fech','SignupController@fech');
Route::get('/gpu_form','SignupController@gpu_form');
Route::get('/cpu_form','SignupController@cpu_form');
Route::get('/game_form','AdminController@game');
Route::post('/game_submit','AdminController@game_insert');
Route::post('/req_submit','AdminController@comparison');
Route::post('/reco_submit','AdminController@recommendation');
Route::post('/vs','AdminController@vs');
Route::get('/bug_forum','SignupController@bug');
Route::post('/bug','SignupController@bug1');
Route::get('/rec_requirement_form', 'SignupController@logged');
Route::get('/logout', 'SignupController@logout');
Route::get('/requirement_form', 'SignupController@rec');
Route::get('/comparison_form', 'SignupController@comp');
Route::resource('signups', 'SignupController'); 
Route::get('/solution_forum', 'SignupController@solution');
Route::post('/S/{user_id}/{queries}', 'SignupController@solution1');

