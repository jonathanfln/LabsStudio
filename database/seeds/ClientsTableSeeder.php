<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create( [
        'name'=>'Simon Gheux',
        'company'=>'Molengeek',
        'image'=>'K9e2SdPLPopSj7KoGcTIrPg1XSNQy3NYQ9a1wk06.jpeg',
        'created_at'=>'2018-06-29 05:20:46',
        'updated_at'=>'2018-06-29 05:20:46'
        ] );


                    
        Client::create( [
        'name'=>'Adnane Bent',
        'company'=>'Molengeek',
        'image'=>'uDTWIiHtq61ycHPL0Ykwg5GuLrEkBGtUxGFWy7Pv.jpeg',
        'created_at'=>'2018-06-29 05:21:17',
        'updated_at'=>'2018-06-29 05:21:17'
        ] );


                    
        Client::create( [
        'name'=>'Sami Hajji',
        'company'=>'Molengeek',
        'image'=>'4ie3tJWThyfRJTfposREUtRIqTu4uQObKQZnh8SY.jpeg',
        'created_at'=>'2018-06-29 05:21:53',
        'updated_at'=>'2018-06-29 05:21:53'
        ] );


                    
        Client::create( [
        'name'=>'Yassine Karchaf',
        'company'=>'YouCommniK',
        'image'=>'ZwmhAlC8bk7QpwXC1gPqHNUDYD7DpFvBbcOjk9k1.jpeg',
        'created_at'=>'2018-06-29 05:24:16',
        'updated_at'=>'2018-06-29 05:24:16'
        ] );


                    
        Client::create( [
        'name'=>'Jonathan Flion',
        'company'=>'Molengeek',
        'image'=>'haOoJNYJIw2ulavhSGru0jBCjrpF3xNjOr3w2fd0.jpeg',
        'created_at'=>'2018-06-29 05:24:37',
        'updated_at'=>'2018-06-29 05:24:37'
        ] );


                    
        Client::create( [
        'name'=>'Julian miranda',
        'company'=>'Molengeek',
        'image'=>'JcXM3MHoWbho3cCHuRhgx7OkLO2OO4sDy0KJ36tw.jpeg',
        'created_at'=>'2018-06-29 05:25:04',
        'updated_at'=>'2018-06-29 05:25:04'
        ] );
    }
}
