<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'test1',
            'email' => 'test1@example.com', 
            'password' => Hash::make('testpass1'),
            'role' => '団体', 
            'group_id' => 1, 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => 'test2',
            'email' => 'test2@example.com', 
            'password' => Hash::make('testpass2'),
            'role' => '団体', 
            'group_id' => 2, 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => 'test3',
            'email' => 'test3@example.com', 
            'password' => Hash::make('testpass3'),
            'role' => '閲覧', 
            #'group_id' => , 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => 'test4',
            'email' => 'test4@example.com', 
            'password' => Hash::make('testpass4'),
            'role' => '閲覧', 
            #'group_id' => , 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => 'test5',
            'email' => 'test5@example.com', 
            'password' => Hash::make('testpass5'),
            'role' => '団体', 
            #'group_id' => , 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
