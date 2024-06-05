<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use PDF;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class QuizController extends Controller
{
    public function showQuiz($tag)
    {
        Session::forget(['quiz_start_time', 'quiz_end_time', 'correctAnswers', 'totalQuestions', 'tag', 'duration']);
        $questions = Question::where('tag', $tag)->get();
        Session::put('quiz_start_time', Carbon::now());
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

        if (!Session::has('quiz_end_time')) {
            $endTime = Carbon::now();
            Session::put('quiz_end_time', $endTime);
        } else {
            $endTime = Session::get('quiz_end_time');
        }

        $startTime = Session::get('quiz_start_time');
        $durationInSeconds = $startTime->diffInSeconds($endTime);
        $duration = gmdate('H:i:s', $durationInSeconds);

        session(['correctAnswers' => $correctAnswers]);
        session(['totalQuestions' => $totalQuestions]);
        session(['tag' => $tag]);
        Session::put('duration', $duration);
        return view('quiz.result', compact('correctAnswers', 'totalQuestions', 'tag', 'startTime', 'endTime', 'duration'));
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