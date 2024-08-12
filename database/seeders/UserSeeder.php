<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $datas = [
            [
                "title" => "kerem34",
                "username" => "kerems34",
                "password" => "123456",
            ],
            [
                "title" => "kerem53",
                "username" => "kerems53",
                "password" => "123456",
            ],
            [
                "title" => "kerem44",
                "username" => "kerems44",
                "password" => "123456",
            ],
        ];

        foreach ($datas as $data) {
            $user = new User();
            $user->username = $data["username"];
            $user->title = $data["title"];
            $user->password = $data["password"];
            $user->save();
        }
    }
}
