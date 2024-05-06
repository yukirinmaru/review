<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Http\Requests\ComicRequest; // useする

class ComicController extends Controller
{
    public function index(Comic $comic)//インポートしたComicをインスタンス化して$cominとして使用
        {
            return view('comics.index')->with(['comics' => $comic->getPaginateByLimit()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
        }

    /**
     * 特定IDのpostを表示する
     *
     * @params Object Post // 引数の$postはid=1のPostインスタンス
     * @return Reposnse post view
     */
    public function show(Comic $comic)
    {
        return view('comics.show')->with(['comic' => $comic]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    
    public function create()
    {
        return view('comics.create');
    }
    
    public function store(Comic $comic, ComicRequest $request)
    {
        $input = $request['comic'];
        $comic->fill($input)->save();
        return redirect('/comics/' . $comic->id);
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
}

?>