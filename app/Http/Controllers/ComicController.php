<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index(Comic $comic)//インポートしたComicをインスタンス化して$cominとして使用
        {
            return view('comics.index')->with(['comics' => $comic->getPaginateByLimit()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
        }
}

?>