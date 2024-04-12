<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact-us', 'App\Http\Controllers\frontendController@contact')->name('contact-us');
Route::get('/ICT/Telecom Infrastructure', 'App\Http\Controllers\frontendController@telecom_infrastructure')->name('telecom_infrastructure');
Route::get('/Construction', 'App\Http\Controllers\frontendController@construction')->name('construction');
Route::get('/Audio_Visual System_Installation', 'App\Http\Controllers\frontendController@Audio')->name('Audio');
Route::get('/Biomedical_technology_integrator', 'App\Http\Controllers\frontendController@Biomedical')->name('Biomedical');
Route::get('/service', 'App\Http\Controllers\frontendController@services')->name('Services');
Route::get('/team', 'App\Http\Controllers\TeamController@team')->name('team');
Route::get('/team/{id}', 'App\Http\Controllers\TeamController@show')->name('team.show');

Route::post('/save/message', 'App\Http\Controllers\FeedbackController@store')
    ->name('message.save');
