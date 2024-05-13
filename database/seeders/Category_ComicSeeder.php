<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class Category_ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_comic')->insert([
                'category_id' => '3',
                'comic_id' => '2',
         ]);
        DB::table('category_comic')->insert([
                'category_id' => '4',
                'comic_id' => '2',
         ]);
         
        DB::table('category_comic')->insert([
                'category_id' => '3',
                'comic_id' => '3',
         ]);
         
        DB::table('category_comic')->insert([
                'category_id' => '4',
                'comic_id' => '3',
         ]);
        
        DB::table('category_comic')->insert([
                'category_id' => '3',
                'comic_id' => '4',
         ]);
         
        DB::table('category_comic')->insert([
                'category_id' => '4',
                'comic_id' => '4',
         ]);
         
        DB::table('category_comic')->insert([
                'category_id' => '3',
                'comic_id' => '5',
         ]);
         
        DB::table('category_comic')->insert([
                'category_id' => '4',
                'comic_id' => '5',
         ]);
         
        DB::table('category_comic')->insert([
                'category_id' => '1',
                'comic_id' => '6',
         ]);
        
        DB::table('category_comic')->insert([
                'category_id' => '7',
                'comic_id' => '6',
         ]);
    }
}
