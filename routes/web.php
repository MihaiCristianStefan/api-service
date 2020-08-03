<?php

use App\Http\Controllers\QuizAnswerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/quiz/answers', 'QuizAnswerController@findAll');

Route::get('/quiz/answers/statistics', 'QuizAnswerController@displayStatistics');

Route::post('/quiz/answers', 'QuizAnswerController@store');
