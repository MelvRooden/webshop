<?php

use Illuminate\Database\Seeder;

class category_productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_product')->insert([
            'category_id' => 2,
            'product_id' => 1,
        ]);
    }
}
