<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        $questions = Question::orderByDesc('created_at')->get();
        return view('questions.index', [
            'questions'=>$questions
        ]);
    }
    public function create(){
        return view('questions.create');
    }
    public function store(Request $request){
        $request->validate([
            'content' => 'required|min:5|ends_with:?'
        ], [
            'content.ends_with' => 'You must end your question with "?"'
        ]);
        $question = new Question();
        $question->content = $request->input("content");
        $question->save();
        return redirect()->route('questions.index');
    }
    public function show(Question $question){
        return view('questions.show', [
            'question'=>$question
        ]);
    }
}
