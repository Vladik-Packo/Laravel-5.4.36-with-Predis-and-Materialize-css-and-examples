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
use Illuminate\Http\Request;

// vue example
Route::get('/vue', function () {
    return \View::make('pages.home');
});

// axios example
Route::post('/axios', function (Request $request) {
    echo json_encode($request->all());
});