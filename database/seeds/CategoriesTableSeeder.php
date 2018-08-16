<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('categories')->truncate();
        \Illuminate\Support\Facades\DB::table('categories')->insert([
           [
               'name'=>'Áo đi biển',
               'description'=>'Áo đẹp',
               'thumbnail'=>'https://img.zanado.com/media/catalog/product/cache/all/thumbnail/700x817/7b8fef0172c2eb72dd8fd366c999954c/5/_/ao_so_mi_nam_nu_hoa_tiet_chuoi_sanh_dieu_059e.jpg',
               'created_at'=>date('Y-m-d H:i:s'),
               'updated_at'=>date('Y-m-d H:i:s'),
               'status'=>1
           ],
            [
                'name'=>'Quần đi biển',
                'description'=>'Quần đẹp',
                'thumbnail'=>'https://dathangcn.com/uploads/products/13042016ub508dh5.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'name'=>'Kính đi biển',
                'description'=>'Kính đẹp',
                'thumbnail'=>'https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.0-9/13599999_1736779293236900_2524061243564012600_n.jpg?_nc_cat=0&oh=631caed96da4dfcebfb369be41c2be87&oe=5BC60153',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'name'=>'Mũ đi biển',
                'description'=>'Mũ đẹp',
                'thumbnail'=>'https://xenboutique.com/wp-content/uploads/2017/05/non-di-bien-3-14-600x600.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'name'=>'Dép đi biển',
                'description'=>'Dép đẹp',
                'thumbnail'=>'http://product.hstatic.net/1000171212/product/dl09-2_grande.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
