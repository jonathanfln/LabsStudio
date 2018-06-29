<?php

use Illuminate\Database\Seeder;
use App\Projet;

class ProjetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Projet::create( [
        'name'=>'GET IN THE LAB',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
        'image'=>'UPsnbN1lCKMMkSIEqDQS7vZIqi6ilHnYa3xbS347.jpeg',
        'created_at'=>'2018-06-28 08:10:55',
        'updated_at'=>'2018-06-28 08:10:55'
        ] );


                    
        Projet::create( [
        'name'=>'GET IN THE LAB',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
        'image'=>'3q399MYnLUsbrLQocXsqkL32Tc8hoHSN8E6PODUv.jpeg',
        'created_at'=>'2018-06-28 08:11:24',
        'updated_at'=>'2018-06-28 08:11:24'
        ] );


                    
        Projet::create( [
        'name'=>'GET IN THE LAB',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
        'image'=>'pvIOqBeeGWfFKISYZlTcVLBdlYiUsstE73FEcXIK.jpeg',
        'created_at'=>'2018-06-28 08:11:40',
        'updated_at'=>'2018-06-28 08:11:40'
        ] );
    }
}
