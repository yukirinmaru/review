<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comics')->insert([
                'name' => 'ONE PIECE',
                'overview' => '海賊王を夢見る少年モンキー・D・ルフィを主人公とする「ひとつなぎの大秘宝」をめぐる物語',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
         DB::table('comics')->insert([
                'name' => 'NARUTO',
                'overview' => '火影の名を受け継ぎ仙台を超える忍者になることを夢見るナルトを主人公とする忍同士の派手な多胎を繰り広げるバトルアクション漫画',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
        DB::table('comics')->insert([
                'name' => 'ドラゴンボール',
                'overview' => '世界中に散らばった七つの球をすべて集めると、どんな願いも一つだけ叶えられるという秘宝「ドラゴンボール」と主人公・孫悟空を中心に展開する物語',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
        
        DB::table('comics')->insert([
                'name' => '僕のヒーローアカデミア',
                'overview' => '個性（超能力）を持って生まれるのが当たり前の世界で、「無個性」だった主人公・緑谷出久が最高のヒーローを目指して成長していく物語',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
        DB::table('comics')->insert([
                'name' => 'MAJOR',
                'overview' => '父親のような野球選手になることを夢見て、主人公・五郎が野球選手として成長していく物語',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
    }
}
