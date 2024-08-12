<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $datas = [
            [
                "title" => "Kot Pantolon",
                "category_id" => "1",
                "barcode" => "1234567",
                "stock" => "5",
                "price" => "120"
            ],
            [
                "title" => "Kumaş Pantolon",
                "category_id" => "1",
                "barcode" => "3489567",
                "stock" => "8",
                "price" => "100"
            ],
            [
                "title" => "Kot Ceket",
                "category_id" => "1",
                "barcode" => "4598645",
                "stock" => "9",
                "price" => "170"
            ],
            [
                "title" => "Günlük Ayakkabı",
                "category_id" => "1",
                "barcode" => "1231231",
                "stock" => "2",
                "price" => "300"
            ],
            [
                "title" => "Spor Ayakkabı",
                "category_id" => "1",
                "barcode" => "8456488",
                "stock" => "5",
                "price" => "350"
            ],
        ];

        foreach ($datas as $data) {
            $product = new Product();
            $product->title = $data["title"];
            $product->category_id = $data["category_id"];
            $product->barcode = $data["barcode"];
            $product->stock = $data["stock"];
            $product->price = $data["price"];
            $product->save();
        }
    }
}
