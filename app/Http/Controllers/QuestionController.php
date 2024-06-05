<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel questions
        $questions = Question::all();
        
        // Return view dengan data questions
        return view('banksoal.index', compact('questions'));
    }


    public function store(Request $request)
    {
        
        $request->validate([
            'tag' => 'required|string',
            'quest' => 'required|string',
            'qanswer' => 'required|string',
            'qa' => 'required|string',
            'qb' => 'required|string',
            'qc' => 'required|string',
            'qd' => 'required|string',
        ]);

        Question::create($request->all());

        return redirect()->route('banksoal.index')->with('success', 'Sukses Membuat Soal.');
    }

    public function edit($id)
    {
        $question = Question::findOrFail($id);
        return view('banksoal.edit', compact('question'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tag' => 'required|string',
            'quest' => 'required|string',
            'qanswer' => 'required|string',
            'qa' => 'required|string',
            'qb' => 'required|string',
            'qc' => 'required|string',
            'qd' => 'required|string',
        ]);

        $question = Question::findOrFail($id);
        $question->update($request->all());

        return redirect()->route('banksoal.index')->with('success', 'Sukses Update Soal.');
    }

    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->route('banksoal.index')->with('success', 'Sukses Menghapus Soal.');
    }
}
