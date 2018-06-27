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
        DB::table('categories')->insert([
            'name' => 'Vestibulum maximus',
        ]);
        DB::table('categories')->insert([
            'name' => 'Nisi eu lobortis pharetra',
        ]);
        DB::table('categories')->insert([
            'name' => 'Orci quam accumsan',
        ]);
        DB::table('categories')->insert([
            'name' => 'Auguen pharetra massa',
        ]);
        DB::table('categories')->insert([
            'name' => 'Tellus ut nulla',
        ]);
        DB::table('categories')->insert([
            'name' => 'Etiam egestas viverra',
        ]);
    }
}
