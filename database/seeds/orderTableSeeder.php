<?php

use Illuminate\Database\Seeder;

class orderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \Illuminate\Support\Facades\DB::table('orders')->truncate();
        \Illuminate\Support\Facades\DB::table('orders')->insert([
            [
                'customer_id'=>1,
                'total_price'=>10000,
                'ship_name'=>'Trần Quang A',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>2,
                'total_price'=>20000,
                'ship_name'=>'Trần Quang A2',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>3,
                'total_price'=>30000,
                'ship_name'=>'Trần Quang A3',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>4,
                'total_price'=>40000,
                'ship_name'=>'Trần Quang A4',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>5,
                'total_price'=>50000,
                'ship_name'=>'Trần Quang A5',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>6,
                'total_price'=>60000,
                'ship_name'=>'Trần Quang A6',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>7,
                'total_price'=>70000,
                'ship_name'=>'Trần Quang A7',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>8,
                'total_price'=>80000,
                'ship_name'=>'Trần Quang A8',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>9,
                'total_price'=>90000,
                'ship_name'=>'Trần Quang A49',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>10,
                'total_price'=>150000,
                'ship_name'=>'Trần Quang A10',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>11,
                'total_price'=>110000,
                'ship_name'=>'Trần Quang A11',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>12,
                'total_price'=>120000,
                'ship_name'=>'Trần Quang A12',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>13,
                'total_price'=>130000,
                'ship_name'=>'Trần Quang A13',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>14,
                'total_price'=>140000,
                'ship_name'=>'Trần Quang A14',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>15,
                'total_price'=>150000,
                'ship_name'=>'Trần Quang A15',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>16,
                'total_price'=>160000,
                'ship_name'=>'Trần Quang A16',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>17,
                'total_price'=>120000,
                'ship_name'=>'Trần Quang A17',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>18,
                'total_price'=>130000,
                'ship_name'=>'Trần Quang A18',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>19,
                'total_price'=>140000,
                'ship_name'=>'Trần Quang A19',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>20,
                'total_price'=>510000,
                'ship_name'=>'Trần Quang 20',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>21,
                'total_price'=>210000,
                'ship_name'=>'Trần Quang A21',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>22,
                'total_price'=>220000,
                'ship_name'=>'Trần Quang A22',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>23,
                'total_price'=>230000,
                'ship_name'=>'Trần Quang A23',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>24,
                'total_price'=>240000,
                'ship_name'=>'Trần Quang A24',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>25,
                'total_price'=>250000,
                'ship_name'=>'Trần Quang A25',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>26,
                'total_price'=>290000,
                'ship_name'=>'Trần Quang A26',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>27,
                'total_price'=>270000,
                'ship_name'=>'Trần Quang A27',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>28,
                'total_price'=>280000,
                'ship_name'=>'Trần Quang A28',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>29,
                'total_price'=>420000,
                'ship_name'=>'Trần Quang A29',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ],
            [
                'customer_id'=>30,
                'total_price'=>530000,
                'ship_name'=>'Trần Quang A30',
                'ship_address'=>'Cầu Giay',
                'ship_phone'=>'012345667889',

            ]

        ]);
    }
}