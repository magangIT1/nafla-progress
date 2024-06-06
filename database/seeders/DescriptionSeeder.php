<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Description;

class DescriptionSeeder extends Seeder
{
    /**
     * Run the databse seeds.
     * 
     * @return void
     */
    public function run()
    {
        Description::updateOrCreate([
            'value'=>'new stuff is still good',
        ]);
    }
}