<?php

use Illuminate\Database\Seeder;
use App\Testimonial ;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::create( [
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        'clients_id'=>1,
        'created_at'=>'2018-06-29 05:31:01',
        'updated_at'=>'2018-06-29 05:31:01'
        ] );


                    
        Testimonial::create( [
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        'clients_id'=>2,
        'created_at'=>'2018-06-29 05:31:12',
        'updated_at'=>'2018-06-29 05:31:12'
        ] );


                    
        Testimonial::create( [
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        'clients_id'=>3,
        'created_at'=>'2018-06-29 05:31:17',
        'updated_at'=>'2018-06-29 05:31:17'
        ] );


                    
        Testimonial::create( [
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        'clients_id'=>4,
        'created_at'=>'2018-06-29 05:31:22',
        'updated_at'=>'2018-06-29 05:31:22'
        ] );


                    
        Testimonial::create( [
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        'clients_id'=>5,
        'created_at'=>'2018-06-29 05:31:27',
        'updated_at'=>'2018-06-29 05:31:27'
        ] );


                    
        Testimonial::create( [
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        'clients_id'=>6,
        'created_at'=>'2018-06-29 05:31:32',
        'updated_at'=>'2018-06-29 05:31:32'
        ] );
    }
}
