<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title></title>
    </head>
    <body>
        <main>
            <h1>Ask a question!</h1>
            <form method="POST" action="{{route("question.store")}}">
                @csrf
                <input type="text" name="content"/>
                <input type="submit"/>
            </form>
        </main>
    </body>
</html>
