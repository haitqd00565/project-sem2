<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'categoryId'=>1,
                'collectionId'=>1,
                'name'=>'Áo đi biển',
                'images'=>'https://dathangcn.com/uploads/products/13042016netrpxrq.jpg',
                'price'=> 150000,
                'discount'=>10000,
                'description'=>'Hàng tốt',
                'detail'=>'Hàng bên em tốt miễn bàn',
                'colors'=>1,
                'sizes'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryId'=>3,
                'collectionId'=>3,
                'name'=>'Mũ đi biển',
                'images'=>'https://tea-3.lozi.vn/v1/images/resized/mu-coi-di-bien-1485758495-1-2126564-1490251276?w=480&type=s',
                'price'=> 40000,
                'discount'=>1000,
                'description'=>'Hàng tốt',
                'detail'=>'Hàng bên em tốt miễn bàn',
                'colors'=>1,
                'sizes'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryId'=>1,
                'collectionId'=>1,
                'name'=>'Quần đi biển',
                'images'=>'https://dathangcn.com/uploads/products/13042016netrpxrq.jpg',
                'price'=> 50000,
                'discount'=>5000,
                'description'=>'Hàng tốt',
                'detail'=>'Hàng bên em tốt miễn bàn',
                'colors'=>1,
                'sizes'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryId'=>2,
                'collectionId'=>2,
                'name'=>'Dép đi biển',
                'images'=>'https://dathangcn.com/uploads/products/13042016netrpxrq.jpg',
                'price'=> 50000,
                'discount'=>5000,
                'description'=>'Hàng tốt',
                'detail'=>'Hàng bên em tốt miễn bàn',
                'colors'=>1,
                'sizes'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryId'=>1,
                'collectionId'=>1,
                'name'=>'Quần áo đi biển',
                'images'=>'https://dathangcn.com/uploads/products/13042016netrpxrq.jpg',
                'price'=> 50000,
                'discount'=>5000,
                'description'=>'Hàng tốt',
                'detail'=>'Hàng bên em tốt miễn bàn',
                'colors'=>1,
                'sizes'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryId'=>3,
                'collectionId'=>3,
                'name'=>'Áo đi biển',
                'images'=>'https://dathangcn.com/uploads/products/13042016netrpxrq.jpg',
                'price'=> 50000,
                'discount'=>5000,
                'description'=>'Hàng tốt',
                'detail'=>'Hàng bên em tốt miễn bàn',
                'colors'=>1,
                'sizes'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryId'=>3,
                'collectionId'=>3,
                'name'=>'Giày đi biển',
                'images'=>'https://dathangcn.com/uploads/products/13042016netrpxrq.jpg',
                'price'=> 50000,
                'discount'=>5000,
                'description'=>'Hàng tốt',
                'detail'=>'Hàng bên em tốt miễn bàn',
                'colors'=>1,
                'sizes'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryId'=>1,
                'collectionId'=>1,
                'name'=>'Dép đi biển',
                'images'=>'https://dathangcn.com/uploads/products/13042016netrpxrq.jpg',
                'price'=> 50000,
                'discount'=>5000,
                'description'=>'Hàng tốt',
                'detail'=>'Hàng bên em tốt miễn bàn',
                'colors'=>1,
                'sizes'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryId'=>1,
                'collectionId'=>1,
                'name'=>'Áo cộc đi biển',
                'images'=>'https://dathangcn.com/uploads/products/13042016netrpxrq.jpg',
                'price'=> 50000,
                'discount'=>5000,
                'description'=>'Hàng tốt',
                'detail'=>'Hàng bên em tốt miễn bàn',
                'colors'=>1,
                'sizes'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryId'=>1,
                'collectionId'=>1,
                'name'=>'Quần đùi đi biển',
                'images'=>'https://dathangcn.com/uploads/products/13042016netrpxrq.jpg',
                'price'=> 50000,
                'discount'=>5000,
                'description'=>'Hàng tốt',
                'detail'=>'Hàng bên em tốt miễn bàn',
                'colors'=>1,
                'sizes'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryId'=>3,
                'collectionId'=>3,
                'name'=>'Quần đi biển',
                'images'=>'https://dathangcn.com/uploads/products/13042016netrpxrq.jpg',
                'price'=> 50000,
                'discount'=>5000,
                'description'=>'Hàng tốt',
                'detail'=>'Hàng bên em tốt miễn bàn',
                'colors'=>1,
                'sizes'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryId'=>2,
                'collectionId'=>2,
                'name'=>'Quần đi biển',
                'images'=>'https://dathangcn.com/uploads/products/13042016netrpxrq.jpg',
                'price'=> 50000,
                'discount'=>5000,
                'description'=>'Hàng tốt',
                'detail'=>'Hàng bên em tốt miễn bàn',
                'colors'=>1,
                'sizes'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
        ]);
    }
}
