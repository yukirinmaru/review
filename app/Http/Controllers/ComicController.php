<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index(Comic $comic)//インポートしたComicをインスタンス化して$cominとして使用
        {
            return $comic->get();//$comicの中身を戻り値にする
        }
}
