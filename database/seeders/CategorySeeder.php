<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $erkek = Category::create([
            'image' =>null,
            'thumbnail' =>null,
            'name' => 'Erkek',
            'content' => 'Erkek Giyim',
            'cat_ust' => null,
            'status' => '1'
        ]);

        Category::create([
            'image' =>null,
            'thumbnail' =>null,
            'name' => 'Erkek Kazak',
            'content' => 'Erkek Kazaklar',
            'cat_ust' => $erkek->id,
            'status' => '1'
        ]);

        Category::create([
            'image' =>null,
            'thumbnail' =>null,
            'name' => 'Erkek Pantolon',
            'content' => 'Erkek Pantolonlar',
            'cat_ust' => $erkek->id,
            'status' => '1'
        ]);

        $kadin = Category::create([
            'image' =>null,
            'thumbnail' =>null,
            'name' => 'Kadın',
            'content' => 'Kadın Giyim',
            'cat_ust' => null,
            'status' => '1'
        ]);

        Category::create([
            'image' =>null,
            'thumbnail' =>null,
            'name' => 'Kadın Çanta',
            'content' => 'Kadın Çantalar',
            'cat_ust' => $kadin->id,
            'status' => '1'
        ]);

        Category::create([
            'image' =>null,
            'thumbnail' =>null,
            'name' => 'Kadın Pantolon',
            'content' => 'Kadın Pantolonlar',
            'cat_ust' => $kadin->id,
            'status' => '1'
        ]);

        $cocuk = Category::create([
            'image' =>null,
            'thumbnail' =>null,
            'name' => 'Çocuk',
            'content' => 'Çocuk Giyim',
            'cat_ust' => null,
            'status' => '1'
        ]);

        Category::create([
            'image' =>null,
            'thumbnail' =>null,
            'name' => 'Çocuk Oyuncak',
            'content' => 'Çocuk Oyuncaklar',
            'cat_ust' => $cocuk->id,
            'status' => '1'
        ]);

        Category::create([
            'image' =>null,
            'thumbnail' =>null,
            'name' => 'Çocuk Pantolon',
            'content' => 'Çocuk Pantolonlar',
            'cat_ust' => $cocuk->id,
            'status' => '1'
        ]);
    }
}
