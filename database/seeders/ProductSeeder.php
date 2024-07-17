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
                "product_title" => "pantolon",
                "product_category_id" => "10",
                "barcode" => "123456",
                "product_status"=> "12",
                        ],
        ];

        foreach($datas as $data){
            $product = new Product();
            $product->product_title = $data["product_title"];
            $product->product_category_id = $data["product_category_id"];
            $product->barcode = $data["barcode"];
            $product->product_status = $data["product_status"];
            $product->save();
        }
    }
}


