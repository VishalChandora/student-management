<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserAuthController;

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

Route::prefix('admin')->group(function () { 
    Route::get('login', [UserAuthController::class, 'showLoginForm'])->name('admin.showLogin');
    Route::post('login', [UserAuthController::class, 'login'])->name('admin.login');

    Route::middleware('auth')->group(function () { 
        Route::get('dashboard', [UserAuthController::class, 'dashboard'])->name('admin.showDashboard');

        Route::resource('teachers', TeacherController::class);
        Route::resource('students', StudentController::class);

    });
});