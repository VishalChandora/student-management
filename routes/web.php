<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\StudentAuthController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\MarkController;


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
        
        Route::resource('attendances',AttendanceController::class);
            Route::get('student-attendances',[AttendanceController::class, 'createAttendance'])->name('admin.student-attendances.create');
            Route::post('student-attendances',[AttendanceController::class, 'storeAttendance'])->name('admin.student-attendances.store');

        Route::get('student-search',[SearchController::class, 'search'])->name('admin.student-search'); 

        Route::resource('marks',MarkController::class);
            Route::get('student-marks',[MarkController::class, 'createMark'])->name('admin.student-marks.create');
            Route::post('student-marks',[MarkController::class, 'storeMark'])->name('admin.student-marks.store');

    });
});


Route::prefix('student')->group(function () {
    Route::get('login', [StudentAuthController::class, 'showLoginForm'])->name('student.showLogin');
    Route::post('login', [StudentAuthController::class, 'login'])->name('student.login');

    Route::middleware('auth')->group(function () { 
        Route::get('dashboard', [StudentAuthController::class, 'dashboard'])->name('student.showDashboard');
    });
});