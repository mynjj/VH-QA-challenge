<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function store(Question $question, Request $request){
        $answer = new Answer(['content'=>$request->input("content")]);
        $question->answers()
                 ->save($answer);
        return redirect()->route('questions.show', $question->id);
    }
}
