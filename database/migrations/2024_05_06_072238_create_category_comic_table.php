<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_comic', function (Blueprint $table) {
            //category_idとcomic_idを外部キーに設定
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');   //参照先のテーブル名を
            $table->foreignId('comic_id')->constrained('comics')->onDelete('cascade');   //参照先のテーブル名を
            $table->primary(['category_id', 'comic_id']); 
        });
    }

   
};
