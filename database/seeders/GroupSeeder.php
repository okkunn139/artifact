<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
                'category_id' => '1',
                'image' => 'img',
                'description' => 'aaa', 
                'place' => 'osaka', 
                'age_limit' => 20, 
                'founding_year' => 2020, 
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
