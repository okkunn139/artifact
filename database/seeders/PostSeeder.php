<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            'group_id' => 1,
            'title' => '団員募集', 
            'body' => '募集してます！',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'group_id' => 1,
            'title' => '定期演奏会のお知らせ', 
            'body' => '是非来てね！',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'group_id' => 2,
            'title' => '団員募集', 
            'body' => '募集してます！',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'group_id' => 2,
            'title' => '定期演奏会のお知らせ', 
            'body' => '是非来てね！',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
