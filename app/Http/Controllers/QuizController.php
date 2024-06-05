<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use PDF;

class QuizController extends Controller
{
    public function showQuiz($tag)
    {
        $questions = Question::where('tag', $tag)->get();
        return view('quiz.index', compact('questions', 'tag'));
    }

    public function submitQuiz(Request $request)
    {
        $questions = Question::whereIn('id', array_keys($request->answers))->get();
        $correctAnswers = 0;

        foreach ($questions as $question) {
            if ($question->qanswer == $request->answers[$question->id]) {
                $correctAnswers++;
            }
        }

        $totalQuestions = count($questions);
        $tag = $request->input('tag');

        session(['correctAnswers' => $correctAnswers]);
        session(['totalQuestions' => $totalQuestions]);
        session(['tag' => $tag]);
        return view('quiz.result', compact('correctAnswers', 'totalQuestions', 'tag'));
    }

    public function generatePdf($tag)
    {
        $correctAnswers = session('correctAnswers');
        $totalQuestions = session('totalQuestions');
        $tag = session('tag');

        $data = [
            'correctAnswers' => $correctAnswers,
            'totalQuestions' => $totalQuestions,
            'tag' => $tag,
        ];

        $pdf = PDF::loadView('quiz.pdf', $data);
        return $pdf->download('quiz_report_' . $tag . '.pdf');
    }
}