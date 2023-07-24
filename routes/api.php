<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\InstitutionController;

Route::apiResource('students', StudentController::class);
Route::apiResource('teachers', TeacherController::class);
Route::apiResource('careers', CareerController::class);
Route::apiResource('grades', GradeController::class);
Route::apiResource('subjects', SubjectController::class);
Route::get('institution', [InstitutionController::class, 'showInstitution']);
Route::put('institution/{institution}', [InstitutionController::class, 'update']);