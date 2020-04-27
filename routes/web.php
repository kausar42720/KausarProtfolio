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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('home', function () {
    return view('admin.home-index');
});


// Route::resource('about','aboutController');

Route::get('about', function () {
    return view('admin.about');
})->name('aboutpage');

Route::post('aboutPostData','aboutPostDataController@aboutPostData')->name('aboutPostData');

Route::get('/kausar','aboutPostDataController@kausar')->name('about.ShowData');
Route::get('/aboutDataFetch','PortfolioController@aboutDataFetch')->name('aboutDataFetch');

Route::get('education', function () {
    return view('admin.education');
})->name('education');

Route::get('skill', function () {
    return view('admin.skill');
})->name('skill');

Route::get('experience', function () {
    return view('admin.experience');
})->name('experience');

Route::get('award', function () {
    return view('admin.award');
})->name('award');

Route::get('contactMe', function () {
    return view('admin.contact-me');
})->name('contactMe');

Route::get('interests', function () {
    return view('admin.interests');
})->name('interests');


Route::get('complitedproject', function () {
    return view('admin.completed-project');
})->name('complitedproject');

Route::get('single', function () {
    return view('admin.single');
})->name('single');
