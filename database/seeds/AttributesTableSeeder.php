<?php

use App\Models\Attribute;
use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a size attribute
        Attribute::create([
            'code'          =>  'rozmiar',
            'name'          =>  'Rozmiar',
            'frontend_type' =>  'select',
            'is_filterable' =>  1,
            'is_required'   =>  1,
        ]);

        // Create a color attribute
        Attribute::create([
            'code'          =>  'kolor',
            'name'          =>  'Kolor',
            'frontend_type' =>  'select',
            'is_filterable' =>  1,
            'is_required'   =>  1,
        ]);
    }
}
