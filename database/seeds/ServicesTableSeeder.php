<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create( [
        'name'=>'GET IN THE LAB',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
        'image'=>'flaticon-023-flask',
        'created_at'=>'2018-06-28 07:15:02',
        'updated_at'=>'2018-06-28 07:15:02'
        ] );
                    
        Service::create( [
        'name'=>'PROJECTS ONLINE',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
        'image'=>'flaticon-011-compass',
        'created_at'=>'2018-06-28 07:15:40',
        'updated_at'=>'2018-06-28 07:15:40'
        ] );
                    
        Service::create( [
        'name'=>'SMART MARKETING',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
        'image'=>'flaticon-037-idea',
        'created_at'=>'2018-06-28 07:16:14',
        'updated_at'=>'2018-06-28 07:16:14'
        ] );
                    
        Service::create( [
        'name'=>'SOCIAL MEDIA',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
        'image'=>'flaticon-039-vector',
        'created_at'=>'2018-06-28 07:16:50',
        'updated_at'=>'2018-06-28 07:17:11'
        ] );
                    
        Service::create( [
        'name'=>'BRAINSTORMING',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
        'image'=>'flaticon-036-brainstorming',
        'created_at'=>'2018-06-28 07:18:01',
        'updated_at'=>'2018-06-28 07:18:01'
        ] );
                    
        Service::create( [
        'name'=>'DOCUMENTED',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
        'image'=>'flaticon-026-search',
        'created_at'=>'2018-06-28 07:18:31',
        'updated_at'=>'2018-06-28 07:18:31'
        ] );
                    
        Service::create( [
        'name'=>'RESPONSIVE',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
        'image'=>'flaticon-018-laptop-1',
        'created_at'=>'2018-06-28 07:19:00',
        'updated_at'=>'2018-06-28 07:19:00'
        ] );
                    
        Service::create( [
        'name'=>'RETINA READY',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
        'image'=>'flaticon-043-sketch',
        'created_at'=>'2018-06-28 07:19:42',
        'updated_at'=>'2018-06-28 07:19:42'
        ] );
                    
        Service::create( [
        'name'=>'ULTRA MODERN',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
        'image'=>'flaticon-012-cube',
        'created_at'=>'2018-06-28 07:20:12',
        'updated_at'=>'2018-06-28 07:20:26'
        ] );
    }
}
