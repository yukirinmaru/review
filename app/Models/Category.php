<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    //コミックに対するリレーション
    public function comics(){
        //1つのカテゴリーを多数のコミックが持っている。
        return $this->belongsToMany(Comic::class);
    }
}
