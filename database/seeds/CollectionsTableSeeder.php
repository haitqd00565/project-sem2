<?php

use Illuminate\Database\Seeder;

class CollectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \Illuminate\Support\Facades\DB::table('collections')->truncate();
        \Illuminate\Support\Facades\DB::table('collections')->insert([
                [
                    'name' => 'Quần áo đôi đi biển',
                    'description' => 'Bộ sưu tập mùa hè mới nhất của năm 2018',
                    'thumbnail' => 'https://vaynudep.com/wp-content/uploads/2018/02/do-di-bien-cap-01.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
                [
                    'name' => 'Quần áo đi biển',
                    'description' => 'Bộ sưu tập đi biển của năm 2018',
                    'thumbnail' => 'http://dodoi.net/upload/files/ao-cap-doi-khi-em-la-em-1489123404.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
                [
                    'name' => 'Quần áo đi biển',
                    'description' => 'Bộ sưu tập mùa hè',
                    'thumbnail' => 'http://i.timhieu.net/wp-content/uploads/2018/01/trang-phuc-di-bien-dep-d%C3%A0nh-cho-be-2.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ]
            ]
        );
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
