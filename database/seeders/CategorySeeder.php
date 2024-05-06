<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'School Life',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
        DB::table('categories')->insert([
            'name' => 'Comedy',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        
        DB::table('categories')->insert([
            'name' => 'Fantasy',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
        DB::table('categories')->insert([
            'name' => 'Action',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
        DB::table('categories')->insert([
            'name' => 'Mystery',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
        DB::table('categories')->insert([
            'name' => 'Romance',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]); 
            
        DB::table('categories')->insert([
            'name' => 'Sports',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        
        DB::table('categories')->insert([
            'name' => 'Gourment',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        
        DB::table('categories')->insert([
            'name' => 'Another World',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        
    }
}
