<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            'image' => 'https://fakeimg.pl/1920x700/',
            'name' => 'E-Ticaret Sitemize Hoşgeldiniz',
            'content' => 'E-ticaret sitesinden güvenli bir şekilde alışveriş yapabilirsiniz.',
            'link' => 'urunler',
            'status' => '1'

        ]);
    }
}
