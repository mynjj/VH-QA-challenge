@extends('layout')

@section('title', 'Questions')

@section('content')
<div class="container text-center">
    <h1>VH Q&A Challenge!</h1>
    <hr/>
    <p>Hey there 🌱!</p>
    <p>Feel free to answer any of the questions below, or <a href="{{route("questions.create")}}">ask your own question!</a> 🐷🐮🐔🐙🐝</p>
    <ul class="list-group">
        @forelse($questions as $question)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <h5>{{$question->content}}</h5>
            <a href="{{route("questions.show", $question->id)}}">
                <span class="badge bg-success rounded-pill">{{$question->answers()->count()}} answers</span>
            </a>
        </li>
        @empty
        <h5>Oh wow! No questions yet... <a href="{{route("questions.create")}}">ask your own!</a></h5>
        @endif
    </ul>
</div>
@endsection
