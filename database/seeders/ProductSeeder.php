<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $product = [

            [
                'product_name' => 'Kulot Rose BlackPink',
                'product_unique_id' => '1',
                'category_id' => '1',
                'description'  => 'this is a pair of pants',
                'image' => 'images/pants.jpg'
            ],
            [
                'product_name' => 'Kulot Jennie',
                'product_unique_id' => '2',
                'category_id' => '1',
                'description'  => 'this is a pair of pants',
                'image' => 'images/pants.jpg'
            ],
            [
                'product_name' => 'Kulot LiSA',
                'product_unique_id' => '3',
                'category_id' => '1',
                'description'  => 'this is a pair of pants',
                'image' => 'images/pants.jpg'
            ],
            [
                'product_name' => 'Gamis Gemoy',
                'product_unique_id' => '4',
                'category_id' => '2',
                'description'  => 'this is a pair of pants',
                'image' => 'images/pants.jpg'
            ],
            [
                'product_name' => 'Jombo Pants',
                'product_unique_id' => '5',
                'category_id' => '5',
                'description'  => 'this is a pair of pants',
                'image' => 'images/pants.jpg'
            ],
            [
                'product_name' => 'Joger Jaegar',
                'product_unique_id' => '6',
                'category_id' => '6',
                'description'  => 'this is a pair of pants',
                'image' => 'images/pants.jpg'
            ],
            [
                'product_name' => 'Joger Move like Jagger',
                'product_unique_id' => '7',
                'category_id' => '6',
                'description'  => 'this is a pair of pants',
                'image' => 'images/pants.jpg'
            ],
            [
                'product_name' => 'Overall Over the Wall',
                'product_unique_id' => '8',
                'category_id' => '8',
                'description'  => 'this is a pair of pants',
                'image' => 'images/pants.jpg'
            ],
            [
                'product_name' => 'One Set One Piece',
                'product_unique_id' => '9',
                'category_id' => '9',
                'description'  => 'this is a pair of pants',
                'image' => 'images/pants.jpg'
            ],

        ];

        DB::table('products')->insert($product);
    }
}
