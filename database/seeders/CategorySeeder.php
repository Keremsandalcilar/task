<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $datas = [
            [
                "title" => "Pantolon",
                "description" => "açıklama",
                "status" => "active"
            ],
            [
                "title" => "Ceket",
                "description" => "açıklama",
                "status" => "active"
            ],
            [
                "title" => "Ayakkabı",
                "description" => "açıklama",
                "status" => "active"
            ]

        ];

        foreach ($datas as $data) {
            $category = new Category();
            $category->title = $data["title"];
            $category->description = $data["description"];
            $category->status = $data["status"];
            $category->save();
        }
    }
}
