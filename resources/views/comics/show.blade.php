<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Comics</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="name">
            {{ $comic->name }}
        </h1>
        <div class="overview">
            <div class="overview__comic">
                <h3>本文</h3>
                <p>{{ $comic->overview }}</p>    
            </div>
        </div>
        <div class="edit"><a href="/comics/{{ $comic->id }}/edit">編集</a></div>
        <div class="footer">
            <a href="/">戻る</a>
        <div>
        
        <form class="mb-4" method="POST" action="{{ route('comment.store') }}">
    @csrf
 
    <input
        name="comic_id"
        type="hidden"
        value="{{ $comic->id }}"
    >
         <div class="form-group">
	    <label for="comment">
		    本文
	    </label>
        <textarea name="body" id="comment" placeholder="コメントを入力してください"></textarea>
        {{-- <textarea --}}
        <!--    id="comment"-->
        <!--    name="comment"-->
        {{--    class="form-control{{- {{ $errors->has('body') ? 'is-invalid' : '' }}"--}}
        <!--    rows="4"-->
        {{-->{{ old('body') }}</textarea>--}}
        {{--@if ($errors->has('body'))--}}
        <!--	<div class="invalid-feedback">-->
        {{--		{{ $errors->first('body') }}--}}
        <!--	</div>-->
        {{--@endif--}}
    </div>
 
    <div class="mt-4">
	    <button type="submit" class="btn btn-primary">
		    コメントする
	    </button>
    </div>
</form>    
    @if (session('commentstatus'))
    <div class="alert alert-success mt-4 mb-4">
    	{{ session('commentstatus') }}
    </div>
@endif

        <h2>コメント一覧</h2>
        @foreach ($comments as $comment)
            <h4>{{ $comment->user->name }}</h4>
            <p>{{ $comment->body }}</p>
        @endforeach
    </body>
</html>