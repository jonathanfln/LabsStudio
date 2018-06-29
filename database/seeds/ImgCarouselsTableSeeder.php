<?php

use Illuminate\Database\Seeder;
use App\ImgCarousel;

class ImgCarouselsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ImgCarousel::create( [
        'name'=>'img 1',
        'image'=>'3x6zvdWnQkWWuDEIECQaO1vVrk7bhM0WHLLuaR1S.jpeg',
        'created_at'=>'2018-06-28 07:09:07',
        'updated_at'=>'2018-06-28 07:09:07'
        ] );
                    
        ImgCarousel::create( [
        'name'=>'img 2',
        'image'=>'ChNvWgFdiX3GlJ4gi5KuY2CgMHTMNwiJsmPmfHOw.jpeg',
        'created_at'=>'2018-06-28 07:09:14',
        'updated_at'=>'2018-06-28 07:09:14'
        ] );
    }
}
