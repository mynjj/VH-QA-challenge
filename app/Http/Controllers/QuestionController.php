<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        $questions = Question::all();
        return view('questions', [
            'questions'=>$questions
        ]);
    }
    public function create(){
        return view('questions.create');
    }
    public function store(Request $request){
        $question = new Question();
        $question->content = $request->input("content");
        $question->save();
        return redirect()->route('question.index');
    }
    public function show(Question $question){
        return view('questions.show', [
            'question'=>$question
        ]);
    }
}
