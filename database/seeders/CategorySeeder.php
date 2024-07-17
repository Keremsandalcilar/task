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
                "category_id"=> "1",
                "category_title" => "pantolon",
                "category_description" => "10",
                "category_status"=> "12 adet",
                        ],
        ];

        foreach($datas as $data){
            $category = new Category();
            $category->category_id = $data["category_id"];
            $category->category_title = $data["category_title"];
            $category->category_description = $data["category_description"];
            $category->category_status = $data["category_status"];
            $category->save();
        }
    }
}

