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
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

//Auth::routes();
// Equivalent to Auth::routes()
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');

Route::get('/password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset');

Route::get('/email/verify', 'App\Http\Controllers\Auth\VerificationController@show')->name('verification.notice');
Route::get('/email/verify/{id}', 'App\Http\Controllers\Auth\VerificationController@verify')->name('verification.verify');
Route::get('/email/resend', 'App\Http\Controllers\Auth\VerificationController@resend')->name('verification.resend');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->group(function () {


    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        Route::get('/teams', "App\Http\Controllers\TeamsController@index")->name('admin.teams');
        Route::post('/teams', "App\Http\Controllers\TeamsController@store")->name('teams.create');
        Route::get('/teams/{team}', "App\Http\Controllers\TeamsController@destroy")->name('teams.delete');
        Route::get('/teams/show/{team}', "App\Http\Controllers\TeamsController@show")->name('teams.show');

        Route::get('/feedbacks', 'App\Http\Controllers\FeedbackController@feedbacks')->name('feedbacks.all');
        Route::get('/feedbacks/show/{team}', "App\Http\Controllers\FeedbackController@show")->name('feedbacks.show');
        Route::post('/feedbacks/update', "App\Http\Controllers\FeedbackController@update")->name('feedbacks.update');

    });
});
