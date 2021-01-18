<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;

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
        return view('questions.create', [
            'suggestion' => Arr::random([
                'What do you eat?',
                'Why do you care about animals?',
                'Tips on quick vegan meals',
                'How do you handle social events?',
                'What is your favorite meal?',
                'Do you really think you can make a change?',
                'Isn\'t it unhealthy to be a vegan?',
                'Why is there a problem with milk or by-products?',
            ])
        ]);
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
