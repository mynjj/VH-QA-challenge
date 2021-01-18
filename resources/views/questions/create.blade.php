@extends('layout')

@section('title', 'Add your question')
@section('content')
<div class="container text-center">
    <h1>Ask anything 🌱</h1>
    <form class="mt-5 d-flex" method="POST" action="{{route("questions.store")}}">
        @csrf
        <textarea name="content" class="form-control" placeholder="Your question here..." id="question-content"></textarea>
        <input class="btn btn-success ms-3" type="submit" value="Ask"/>
    </form>
</div>
@endsection
