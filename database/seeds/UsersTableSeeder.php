<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jonathan Flion',
            'email' => 'jnflion@gmail.com',
            'password' => bcrypt('azerty'),
            'image' => 'mC3xf7Xf5xwrb7Tmfe7Zu5xsIrs0cvNGP0LmFq55.jpeg',
            'roles_id' => 1,
            'job' => 'SuperChief de la MKT',
        ]);
        DB::table('users')->insert([
            'name' => 'Adnane Bent',
            'email' => 'adnane@gmail.com',
            'password' => bcrypt('azerty'),
            'image' => '1MAnrZZruVIMPTyc3fillEtpkYmH8MlWcDmt5dKE.jpeg',
            'roles_id' => 1,
            'job' => 'Dev Laravel',
        ]);
        DB::table('users')->insert([
            'name' => 'Simon Gheux',
            'email' => 'simon@gmail.com',
            'password' => bcrypt('azerty'),
            'image' => 'h61fdhE7TykJdc8BVjKUwAPl7Bt4MD7DFGvQftQ0.jpeg',
            'roles_id' => 1,
            'job' => 'Dev WordPress',
        ]);
    }
}
