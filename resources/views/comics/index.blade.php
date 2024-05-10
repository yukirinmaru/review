<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Review</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
        </x-slot>
    
    <body>
        <h1>Blog Name</h1>
        
        <div>
          <form action="{{ route('comics.index') }}" method="GET">
            <input type="text" name="keyword" value="{{ $keyword }}">
            <input type="submit" value="検索">
          </form>
        </div>
        
            <a href='/comics/create'>新規作成</a>
        <div class='comics'>
            @foreach ($comics as $comic)
                <div class='comic'>
                    <h2 class='name'>
                        <a href="/comics/{{ $comic->id }}">{{ $comic->name }}</a>
                    </h2>
                    <p class='overview'>{{ $comic->overview }}</p>
                    <h2 class='category'>
                        @foreach($comic->categories as $category)
                            {{ $category->name }}
                        @endforeach
                    </h2>
                    <form action="/comics/{{ $comic->id }}" id="form_{{ $comic->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $comic->id }})">delete</button> 
                    </form>
                </div>
            @endforeach
        {{ Auth::user()->name }}
        </div>
        <div class='paginate'>
            {{ $comics->links() }}
        </div>
        <script>
            function deletePost(id) {
                'use strict'
        
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
    </x-app-layout>
</html>