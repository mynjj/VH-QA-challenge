<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;

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

Route::get('/', [QuestionController::class, 'index'])->name("question.index");
Route::get('/question/create', [QuestionController::class, 'create'])->name("question.create");
Route::post('/question', [QuestionController::class, 'store'])->name("question.store");
Route::get('/question/{question}', [QuestionController::class, 'show'])->name("question.show");

Route::post('/question/{question}/answer', [AnswerController::class, 'store'])->name("question.answer.store");
