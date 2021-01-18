<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title></title>
    </head>
    <body>
        <main>
            <h1>VH Q&A Challenge</h1>
            @forelse($questions as $question)
            {{$question->content}}
            @empty
            No questions yet! Add a question!
            @endif
        </main>
    </body>
</html>
