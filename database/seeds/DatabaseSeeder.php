<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            CategoriesTableSeeder::class,
            IconsTableSeeder::class,
            ServicesTableSeeder::class,
            ClientsTableSeeder::class,
            TestimonialsTableSeeder::class,
            ImgCarouselsTableSeeder::class,
            ProjetsTableSeeder::class,
        ]);
    }
}
