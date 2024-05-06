<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Review</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/comics" method="POST">
            @csrf
            <div class="name">
                <h2>Title</h2>
                <input type="text" name="comic[name]" placeholder="タイトル" value="{{ old('comic.name') }}"/>
                <p class="name__error" style="color:red">{{ $errors->first('comic.name') }}</p>
            </div>
            </div>
            <div class="overview">
                <h2>Body</h2>
                <textarea name="comic[overview]" placeholder="とても面白かった。">{{ old('comic.overview') }}</textarea>
                <p class="overview__error" style="color:red">{{ $errors->first('comic.overview') }}</p>
            </div>
            <div>
                <h2>Category</h2>
                @foreach($categories as $category)
        
                    <label>
                        {{-- valueを'$subjectのid'に、nameを'配列名[]'に --}}
                        <input type="checkbox" value="{{ $category->id }}" name="categories_array[]">
                            {{$category->name}}
                        </input>
                    </label>
                    
                @endforeach         
            </div>
            <input type="submit" value="投稿"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>