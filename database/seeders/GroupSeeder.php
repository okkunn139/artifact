<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class GroupSeeder extends Seeder
{
    public function run()
    {
        DB::table('groups')->insert([
            'category_id' => 1,
            'name' => '大阪合唱団', 
            'image' => 'img',
            'description' => '週１で練習してます', 
            'place' => '大阪', 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('groups')->insert([
            'category_id' => 1,
            'name' => '東京合唱団', 
            'image' => 'img',
            'description' => '週２で練習してます', 
            'place' => '東京', 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('groups')->insert([
            'category_id' => 2,
            'name' => '名古屋交響楽団', 
            'image' => 'img',
            'description' => '週３で練習してます', 
            'place' => '名古屋', 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('groups')->insert([
            'category_id' => 2,
            'name' => '福岡交響楽団', 
            'image' => 'img',
            'description' => '週４で練習してます', 
            'place' => '福岡', 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
