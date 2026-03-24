<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/students', [ActionController::class, 'students'])->name('students');
    Route::get('/users', [ActionController::class, 'users'])->name('users');
    Route::get('/changepassword', [ActionController::class, 'changepassword'])->name('changepassword');
    Route::get('/addnewusers', [ActionController::class, 'addnewusers'])->name('addnewusers');
    Route::get('/classes', [ActionController::class, 'classes'])->name('classes');
    Route::get('/arms', [ActionController::class, 'arms'])->name('arms');
    Route::get('/division', [ActionController::class, 'division'])->name('division');
    Route::get('/houses', [ActionController::class, 'houses'])->name('houses');
    Route::get('/subjects', [ActionController::class, 'subjects'])->name('subjects');
    Route::get('/uploadstudents', [ActionController::class, 'uploadstudents'])->name('uploadstudents');

    // Add pages
    Route::get('/addclass', [ActionController::class, 'addclass'])->name('addclass');
    Route::get('/addarms', [ActionController::class, 'addarms'])->name('addarms');
    Route::get('/adddivision', [ActionController::class, 'adddivision'])->name('adddivision');
    Route::get('/addhouses', [ActionController::class, 'addhouses'])->name('addhouses');
    Route::get('/addsubjects', [ActionController::class, 'addsubjects'])->name('addsubjects');
    Route::get('/addstudent', [ActionController::class, 'addstudent'])->name('addstudent');

    // Save (POST)
    Route::post('/changepword', [ActionController::class, 'changepword'])->name('changepword');
    Route::post('/savenewusers', [ActionController::class, 'savenewusers'])->name('savenewusers');
    Route::post('/savenewclass', [ActionController::class, 'savenewclass'])->name('savenewclass');
    Route::post('/savenewarms', [ActionController::class, 'savenewarms'])->name('savenewarms');
    Route::post('/savenewdivision', [ActionController::class, 'savenewdivision'])->name('savenewdivision');
    Route::post('/savenewhouses', [ActionController::class, 'savenewhouses'])->name('savenewhouses');
    Route::post('/savenewsubjects', [ActionController::class, 'savenewsubjects'])->name('savenewsubjects');
    Route::post('/savenewstudent', [ActionController::class, 'savenewstudent'])->name('savenewstudent');

    // Actions
    Route::get('/resetpword/{id}', [ActionController::class, 'resetpword'])->name('resetpword');
    Route::get('/deluser/{id}', [ActionController::class, 'deluser'])->name('deluser');
    Route::get('/delclasses/{id}', [ActionController::class, 'delclasses'])->name('delclasses');
    Route::get('/delarms/{id}', [ActionController::class, 'delarms'])->name('delarms');
    Route::get('/deldivision/{id}', [ActionController::class, 'deldivision'])->name('deldivision');
    Route::get('/delhouses/{id}', [ActionController::class, 'delhouses'])->name('delhouses');
    Route::get('/delsubjects/{id}', [ActionController::class, 'delsubjects'])->name('delsubjects');
    Route::get('/addsubjtoclass/{id}', [ActionController::class, 'addsubjtoclass'])->name('addsubjtoclass');
    Route::get('/delstudent/{id}', [ActionController::class, 'delstudent'])->name('delstudent');
    Route::get('/viewstudent/{id}', [ActionController::class, 'viewstudent'])->name('viewstudent');
    Route::get('/uploadpassport/{id}', [ActionController::class, 'uploadpassport'])->name('uploadpassport');
    Route::get('/studentdata/{id}', [ActionController::class, 'studentdata'])->name('studentdata');

    Route::post('/uploadpassport', [StudentController::class, 'uploadPassport'])->name('uploadpassport');
    Route::post('/save-classes', [ActionController::class, 'saveClasses'])->name('save.classes');
    Route::post('/uploadstudent', [StudentController::class, 'uploadStudent'])->name('uploadstudent');
    Route::post('/storestudent', [StudentController::class, 'storestudent'])->name('storestudent');


});
