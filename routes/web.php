<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;


Route::resource('questions', QuestionController::class)->only([
    'index', 'show', 'create', 'store'
]);

Route::post('/question/{question}/answer', [AnswerController::class, 'store'])->name("question.answer.store");


Route::redirect('/', route('questions.index'));
