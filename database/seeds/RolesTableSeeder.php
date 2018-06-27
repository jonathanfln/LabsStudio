<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'slug' => 'admin',
            'name' => 'Administrateur',
        ]);
        DB::table('roles')->insert([
            'slug' => 'editor',
            'name' => 'Éditeur',
        ]);
        DB::table('roles')->insert([
            'slug' => 'guest',
            'name' => 'Invité',
        ]);
    }
}
