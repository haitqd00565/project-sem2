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
                'images'=>'https://i.pinimg.com/originals/9f/b1/00/9fb1000c0ab72a9b086eb7a45e989a4d.jpg',
                'price'=> 150000,
                'discount'=>20,
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
                'name'=>'Áo đi biển',
                'images'=>'http://static.netlife.vn//2016/04/24/09/01/diem-danh-cac-loai-vay-ao-can-phai-co-khi-di-bien_21.jpg?maxwidth=480',
                'price'=> 150000,
                'discount'=>20,
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
                'name'=>'Áo đi biển',
                'images'=>'http://ttol.vietnamnetjsc.vn//2018/02/26/07/59/my-nhan-viet-kin-ho-voi-ao-luoi-di-bien-day-khieu-khich_9.jpg',
                'price'=> 150000,
                'discount'=>20,
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
                'images'=>'https://dodoigiare.com/wp-content/uploads/2017/11/quan-di-bien-cap-doi-QDB104-540x540.jpg',
                'price'=> 50000,
                'discount'=>10,
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
                'images'=>'http://xuongquanlot.com/images/products/2018/03/16/original/quan-di-bien-nu-dep-1521206662.jpg',
                'price'=> 100000,
                'discount'=>30,
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
                'images'=>'http://h2shoponline.com/uploads/files/29683594_1304938866273445_1588781877755458623_n.jpg',
                'price'=> 1500000,
                'discount'=>0,
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
                'name'=>'Kính đi biển',
                'images'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqS9VrD-FmeiV9S9MCMb09kGIb4UD_tQZufilOJwKc1rSLzSkA',
                'price'=> 100000,
                'discount'=>10,
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
                'name'=>'Kính đi biển',
                'images'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuO7e1eFn5FGNg2U3vGpgsBrNmYKXH8EXVTMF9zC9K5B90LwgJ',
                'price'=> 200000,
                'discount'=>50,
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
                'name'=>'Kính đi biển',
                'images'=>'https://vn-live-02.slatic.net/p/8/kinh-mat-di-bien-di-choi-cho-nu-kieu-dang-sanh-dieu-2017-1498201539-4014096-85441f98971bff0984198be15e60dcac-product.jpg',
                'price'=> 110000,
                'discount'=>10,
                'description'=>'Hàng tốt',
                'detail'=>'Hàng bên em tốt miễn bàn',
                'colors'=>1,
                'sizes'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryId'=>4,
                'collectionId'=>4,
                'name'=>'Mũ đi biển',
                'images'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpa_H-5rzKiJPNx_g75yFhJWw0_-2cH5Loylsq9h54kpgmXZoh',
                'price'=> 10000,
                'discount'=>10,
                'description'=>'Hàng tốt',
                'detail'=>'Hàng bên em tốt miễn bàn',
                'colors'=>1,
                'sizes'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryId'=>4,
                'collectionId'=>4,
                'name'=>'Mũ đi biển',
                'images'=>'https://chovang.com/upload/Product/mu-coi-rong-vanh-di-bien-phong-cach-han-quoc-ms05-gia-si--1515058860.jpg',
                'price'=> 1110000,
                'discount'=>20,
                'description'=>'Hàng tốt',
                'detail'=>'Hàng bên em tốt miễn bàn',
                'colors'=>1,
                'sizes'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryId'=>4,
                'collectionId'=>4,
                'name'=>'Mũ đi biển',
                'images'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0D49e77-Nx8bcIP-26YppGkPjL13kOuoULFle5cs8OaP3rchx',
                'price'=> 510000,
                'discount'=>30,
                'description'=>'Hàng tốt',
                'detail'=>'Hàng bên em tốt miễn bàn',
                'colors'=>1,
                'sizes'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryId'=>5,
                'collectionId'=>5,
                'name'=>'Dép đi biển',
                'images'=>'http://i02.c.aliimg.com/img/ibank/2014/322/519/1374915223_1273175495.400x400.jpg',
                'price'=> 510000,
                'discount'=>10,
                'description'=>'Hàng tốt',
                'detail'=>'Hàng bên em tốt miễn bàn',
                'colors'=>1,
                'sizes'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryId'=>5,
                'collectionId'=>5,
                'name'=>'Dép đi biển',
                'images'=>'http://cuocsongvang.vn/cdn/store/11055/ps/20170818/Dep_di_bien_eva_GLD001_Navy__1__800x800.jpg',
                'price'=> 310000,
                'discount'=>30,
                'description'=>'Hàng tốt',
                'detail'=>'Hàng bên em tốt miễn bàn',
                'colors'=>1,
                'sizes'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryId'=>5,
                'collectionId'=>5,
                'name'=>'Dép đi biển',
                'images'=>'http://cuocsongvang.vn/cdn/store/11055/ps/20170818/dep_di_bien_gld001_white__0__800x800.jpg',
                'price'=> 210000,
                'discount'=>20,
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
