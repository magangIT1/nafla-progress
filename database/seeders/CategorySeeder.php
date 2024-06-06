<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the databse seeds.
     * 
     * @return void
     */
    public function run()
    {
        Category::updateOrCreate([
            'name'=>'study desk',
        ]);
    }
}