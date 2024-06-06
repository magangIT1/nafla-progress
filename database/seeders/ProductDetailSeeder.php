<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductDetail;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the databse seeds.
     * 
     * @return void
     */
    public function run()
    {
        ProductDetail::updateOrCreate([
            'description'=>'halo bg',
            'image'=>'cat.jpg'
        ]);
    }
}