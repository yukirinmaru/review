<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Http\Requests\ComicRequest; // useする
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Comment;

class ComicController extends Controller
{
      
        
        public function index(Comic $comic, Request $request)
             {
                $keyword = $request->input('keyword');
        
                $query = Comic::query();
        
                if(!empty($keyword)) {
                    $query->where('name', 'LIKE', "%{$keyword}%")
                        ->orWhere('overview', 'LIKE', "%{$keyword}%");
                }
        
                $comics = $query->get();
        
                return view('comics.index')->with(['comics' => $comic->getPaginateByLimit(), 'comicsearch' =>$comics, 'keyword' =>$keyword]);
            }
        

    /**
     * 特定IDのpostを表示する
     *
     * @params Object Post // 引数の$postはid=1のPostインスタンス
     * @return Reposnse post view
     */
    public function show(Comic $comic, Comment $comment)
        {
            //comic_idとcomments tableのcomic_id
            $comments = $comment->where("comic_id", $comic->id)->get();
            return view('comics.show')->with(['comic' => $comic, 'comments'=> $comments]);
         //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
        }
    
    public function create(Category $category)
        {
            return view('comics.create')->with(['categories' => $category->get()]);
        }
    
    public function store(Comic $comic, ComicRequest $request)
        {
            $input_comic = $request['comic'];
            $input_categories = $request->categories_array;
            $comic->fill($input_comic)->save();
            $comic->categories()->attach($input_categories);
            dd($comic);
            return redirect('/comics/');
        }
    
    public function edit(Comic $comic)
        {
            return view('comics.edit')->with(['comic' => $comic]);
        }
    
    public function update(ComicRequest $request, Comic $comic)
        {
            $input_comic = $request['comic'];
            $comic->fill($input_comic)->save();
        
            return redirect('/comics/' . $comic->id);
        }
    
        public function delete(Comic $comic)
            {
                $comic->delete();
                return redirect('/');
            }
            
        
}

?>