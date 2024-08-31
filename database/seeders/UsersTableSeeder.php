<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //初期ユーザーのデータ
        DB::table('users')->insert([
            ['id' => '1',
            'username' => 'Atlas一郎',
            'email' => 'Atlas1@gmail.com',
            'password' => Hash::make('password123'),
            'created_at' => now(),
            'updated_at' => now()
            ]
        ]);
    }
}
