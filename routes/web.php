<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware(['verify.shopify'])->name('home');

Route::group(['middleware' => ['verify.shopify']], function () {

    Route::get('/about', [\App\Http\Controllers\QuestionsController::class, 'about'])->name('about');
    
    Route::get('/questions', [\App\Http\Controllers\QuestionsController::class, 'showQuestions'])->name('questions');
    
    Route::get('/add-questions', [\App\Http\Controllers\QuestionsController::class, 'addQuestions'])->name('add-questions');

    Route::post('/save-questions', [\App\Http\Controllers\QuestionsController::class, 'saveQuestions'])->name('save.questions');
});    



