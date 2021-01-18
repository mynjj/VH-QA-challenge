@extends('layout')

@section('title', 'Add your question')
@section('content')
<div class="container text-center">
    <h1>Ask anything 🌱</h1>
    @if ($errors->any())
    <div class="alert alert-warning">
        Oops! your question is not in the proper format
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form class="mt-5 d-flex" method="POST" action="{{route("questions.store")}}">
        @csrf
        <textarea name="content" class="form-control" placeholder="Need inspiration? How about... {{$suggestion}} " id="question-content">{{old("content")}}</textarea>
        <input class="btn btn-success ms-3" type="submit" value="Ask"/>
    </form>
</div>
@endsection
