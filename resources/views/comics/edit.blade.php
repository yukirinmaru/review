<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Review</title>
    </head>
<!-- body内だけを表示しています。 -->
    <body>
        <h1 class="name">編集画面</h1>
        <div class="overview">
            <form action="/comics/{{ $comic->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__name'>
                    <h2>タイトル</h2>
                    <input type='text' name='comic[name]' value="{{ $comic->name }}">
                </div>
                <div class='content__overview'>
                    <h2>本文</h2>
                    <input type='text' name='comic[overview]' value="{{ $comic->overview }}">
                </div>
                <input type="submit" value="更新">
            </form>
        </div>
    </body>
</html>