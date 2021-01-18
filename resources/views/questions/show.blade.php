<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title></title>
    </head>
    <body>
        <main>
            <h1>Question {{$question->content}}</h1>
            @forelse($question->answers as $answer)
            <p>{{$answer->content}}</p>
            @empty
            No answers yet!</a>
            @endif
            <h2>Add an answer!</h2>
            <form method="POST" action="{{route("question.answer.store", $question->id)}}">
                @csrf
                <input type="text" name="content"/>
                <input type="submit"/>
            </form>
        </main>
    </body>
</html>
