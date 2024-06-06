<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the databse seeds.
     * 
     * @return void
     */
    public function run()
    {
        Product::updateOrCreate([
            'name'=>'table',
            'category'=>'furniture',
            'description'=>'good table',
            'productdetail_id'=>'1'
        ]);
    }
}