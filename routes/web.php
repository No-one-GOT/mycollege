<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
// use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\AboutController;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/dashbord',[DashboardController::class, 'index'])->name('dashboard');
// Route::get('/about',[AboutController::class,'about'])->name("about");
Route::get('/create-student', [StudentController::class, 'create_student'])->name('create.student');
Route::post('/create-student', [StudentController::class, 'store_student'])->name('store.student');
Route::get('/student-list', [StudentController::class, 'student_list'])->name('student.list');
Route::get('/student/{id}', [StudentController::class, 'student_edit'])->name('student.edit');
Route::put('/student/{id}', [StudentController::class, 'student_update'])->name('student.update');
Route::delete('/student/{id}',[StudentController::class,'student_delete'])->name('student.delete');
Route::get('student-view/{id}',[StudentController::class,'student_view'])->name('student.view');
