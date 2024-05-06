<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Review</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='comics'>
            @foreach ($comics as $comic)
                <div class='comic'>
                    <h2 class='name'>
                        <a href="/comics/{{ $comic->id }}">{{ $comic->name }}</a>
                    </h2>
                    <p class='overview'>{{ $comic->overview }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $comics->links() }}
        </div>
    </body>
</html>