<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function store(Question $question, Request $request){
        $request->validate([
            'content' => 'required|min:5'
        ], [
            'content.min' => 'Your answer is too short! It must have at leat 5 characters'
        ]);
        $answer = new Answer(['content'=>$request->input("content")]);
        $question->answers()
                 ->save($answer);
        return redirect()->route('questions.show', $question->id);
    }
}
