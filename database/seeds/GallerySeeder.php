<?php

use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Galleries')->insert([[
            'travel_packages_id' => '1',
            'image' => 'assets/gallery/1.jpeg',
        ],
        [
            'travel_packages_id' => '2',
            'image' => 'assets/gallery/2.jpeg',
        ],
        [
            'travel_packages_id' => '3',
            'image' => 'assets/gallery/3.jpeg',
        ],
        [
            'travel_packages_id' => '4',
            'image' => 'assets/gallery/4.jpeg',
        ]]);
    }
}
