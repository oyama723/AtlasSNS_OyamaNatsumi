<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'username' => 'Atlas一郎',  // ユーザー名
            'mail' => 'Atlas@gmail.com',  // メールアドレス
            'password' => Hash::make('password123'),  // パスワードの暗号化
        ]);
    }
}
