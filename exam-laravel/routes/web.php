<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;


Route::get('/', [ExamController::class, 'index'])
    ->name('exams.index');

Route::post('/thanks', [ExamController::class, 'thanks'])
    ->name('exams.thanks');
