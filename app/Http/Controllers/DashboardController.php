<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Question;

class DashboardController extends Controller
{
    public function index()
    {
        $tags = Question::select('tag')->distinct()->get();

        $tagCounts = [];
        foreach ($tags as $tag) {
            $tagCounts[$tag->tag] = Question::where('tag', $tag->tag)->count();
        }

        return view('dashboard', compact('tagCounts'));
    }
}
