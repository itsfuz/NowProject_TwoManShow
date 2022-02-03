<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [

            [
                'category_name' => 'Kulot'
            ],
            [
                'category_name' => 'Tunik'
            ],
            [
                'category_name' => 'Gamis'
            ],
            [
                'category_name' => 'Atasan XL'
            ],
            [
                'category_name' => 'Jumbo'
            ],
            [
                'category_name' => 'Rok'
            ],
            [
                'category_name' => 'Joger'
            ],
            [
                'category_name' => 'Overall'
            ],
            [
                'category_name' => 'One Set'
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}
