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
            'image' => 'assets/gallery/1a.jpeg',
        ],
        [
            'travel_packages_id' => '1',
            'image' => 'assets/gallery/1b.jpg',
        ],
        [
            'travel_packages_id' => '1',
            'image' => 'assets/gallery/1c.jpg',
        ],
        [
            'travel_packages_id' => '1',
            'image' => 'assets/gallery/1d.jpg',
        ],
        [
            'travel_packages_id' => '1',
            'image' => 'assets/gallery/1e.jpg',
        ],
        [
            'travel_packages_id' => '2',
            'image' => 'assets/gallery/2a.jpeg',
        ],
        [
            'travel_packages_id' => '2',
            'image' => 'assets/gallery/2b.jpg',
        ],
        [
            'travel_packages_id' => '2',
            'image' => 'assets/gallery/2c.jpg',
        ],
        [
            'travel_packages_id' => '2',
            'image' => 'assets/gallery/2d.jpg',
        ],
        [
            'travel_packages_id' => '2',
            'image' => 'assets/gallery/2e.jpg',
        ],
        [
            'travel_packages_id' => '3',
            'image' => 'assets/gallery/3a.jpeg',
        ],
        [
            'travel_packages_id' => '3',
            'image' => 'assets/gallery/3b.jpg',
        ],
        [
            'travel_packages_id' => '3',
            'image' => 'assets/gallery/3c.jpg',
        ],
        [
            'travel_packages_id' => '3',
            'image' => 'assets/gallery/3d.jpg',
        ],
        [
            'travel_packages_id' => '3',
            'image' => 'assets/gallery/3e.jpg',
        ],
        [
            'travel_packages_id' => '4',
            'image' => 'assets/gallery/4a.jpeg',
        ],
        [
            'travel_packages_id' => '4',
            'image' => 'assets/gallery/4b.jpg',
        ],
        [
            'travel_packages_id' => '4',
            'image' => 'assets/gallery/4c.jpg',
        ],
        [
            'travel_packages_id' => '4',
            'image' => 'assets/gallery/4d.jpg',
        ],
        [
            'travel_packages_id' => '4',
            'image' => 'assets/gallery/4e.jpg',
        ]]);
    }
}
