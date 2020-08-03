<?php

namespace App\Http\Controllers;

use App\Domain\AnswersStatistics;
use App\Http\Controllers\Controller;
use App\Models\QuizAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class QuizAnswerController extends Controller
{

    public function findAll(Request $request)
    {
        $quizAnswers = QuizAnswer::all();

        return $quizAnswers;
    }

    public function displayStatistics(Request $request)
    {
        $totalAnwers = QuizAnswer::count();

        $answersA = QuizAnswer::where('answer', '=', 'A')->count();
        $answersB = QuizAnswer::where('answer', '=', 'B')->count();
        $answersC = QuizAnswer::where('answer', '=', 'C')->count();
        $answersD = QuizAnswer::where('answer', '=', 'D')->count();

        $answersStatistics = new AnswersStatistics($answersA, $answersB,
            $answersC, $answersD, $totalAnwers);

        $response = Response::make([$answersStatistics], 200);
        $response->header('Content-Type', 'application/json');

        return $response;

        // return response($answersStatistics, 200)
        //     ->header('Content-Type', 'application/json');
    }

    public function store(Request $request)
    {
        $quizAnswer = new QuizAnswer;

        $quizAnswer->answer = $request->answer;

        $quizAnswer->save();

        return 1;
    }
}
