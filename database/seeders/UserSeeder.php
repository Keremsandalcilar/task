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
                "usertitle" => "kerem34",
                "username" => "kerems36",
                "password" => "12345",
                        ],
                          [
                "usertitle" => "kerem53",
                "username" => "keremss53",
                "password" => "12345",
                        ],
                          [
                "usertitle" => "kerem44",
                "username" => "keremss44",
                "password" => "12345",
                        ],
        ];

        foreach($datas as $data){
            $user = new User();
            $user->username = $data["username"];
            $user->usertitle = $data["usertitle"];
            $user->password = $data["password"];
            $user->save();
        }
    }
}


