<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title></title>
    </head>
    <body>
        <main>
            <h1>VH Q&A Challenge</h1>
            @forelse($questions as $question)
            <a href="{{route("question.show", $question->id)}}">{{$question->content}}</a>
            @empty
            No questions yet!</a>
            @endif
            <a href="{{route("question.create")}}">Add a question!</a>
        </main>
    </body>
</html>
