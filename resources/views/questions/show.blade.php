@extends('layout')

@section('title', $question->content)
@section('content')

<div class="container">
    <h1 class="text-center">{{$question->content}}</h1>
    <h5>What people have said about this...</h5>

    <div class="accordion">
    @forelse($question->answers()->orderBy('created_at')->get() as $answer)
    <div class="accordion-item" id="answer-accordion">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$loop->index}}">
                Answer {{$loop->index + 1}}
            </button>
        </h2>
        <div id="collapse-{{$loop->index}}" class="accordion-collapse collapse show" data-bs-parent="#answer-accordion">
                <div class="accordion-body">
                    {{$answer->content}}
                </div>
            </div>
        </div>
    @empty
    No answers yet!
    @endif
    </div>

    <hr/>
    <h2>Add an answer!</h2>
    @if ($errors->any())
    <div class="alert alert-warning">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form class="d-flex" method="POST" action="{{route("question.answer.store", $question->id)}}">
        @csrf
        <textarea name="content" class="form-control" placeholder="Your answer here..." id="question-content"></textarea>
        <input class="btn btn-success" type="submit" value="Answer"/>
    </form>
    <a href="{{route('questions.index')}}">Back to the questions</a>

</div>
