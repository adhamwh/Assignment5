<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;

Route::get('/', function () {
    return view('home');
});
Route::get('/index', function () {
    return view('index');
});

Route::resource('/students', StudentController::class);
Route::get('/students/index', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

