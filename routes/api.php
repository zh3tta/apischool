<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\SubjectController;

Route::apiResource('students', StudentController::class);
Route::apiResource('teachers', TeacherController::class);
Route::apiResource('careers', CareerController::class);
Route::apiResource('grades', GradeController::class);
Route::apiResource('subjects', SubjectController::class);