<?php

use Illuminate\Database\Seeder;

class TravelPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Travel_Packages')->insert([[
            'title' => 'Bali',
            'slug' => '1',
            'location' => 'Bali, Indonesia',
            'about' => 'Enjoy three nights in little piece of heaven.',
            'featured_event' => 'Ngaben',
            'language' => 'Indonesian',
            'foods' => 'Nasi Campur',
            'departure_date' => '2020-01-01',
            'duration' => '5D4N',
            'type' => 'Open Trip',
            'price' => '9750000'
        ],
        [
            'title' => 'Yogyakarta',
            'slug' => '2',
            'location' => 'Yogyakarta, Indonesia',
            'about' => 'Theres always something in Yogyakarta',
            'featured_event' => 'Sekaten',
            'language' => 'Indonesian',
            'foods' => 'Nasi Gudeg',
            'departure_date' => '2020-02-11',
            'duration' => '3D2N',
            'type' => 'Open Trip',
            'price' => '3550000'
        ],
        [
            'title' => 'Bandung',
            'slug' => '3',
            'location' => 'Bandung, Indonesia',
            'about' => 'Nature and Creative city.',
            'featured_event' => 'Light Festival',
            'language' => 'Indonesian',
            'foods' => 'Sate',
            'departure_date' => '2020-03-28',
            'duration' => '3D2N',
            'type' => 'Open Trip',
            'price' => '3250000'
        ],
        [
            'title' => 'Jakarta',
            'slug' => '4',
            'location' => 'Jakarta, Indonesia',
            'about' => 'Enjoy Indonesia capital city.',
            'featured_event' => 'PRJ',
            'language' => 'Indonesian',
            'foods' => 'Gado-Gado',
            'departure_date' => '2020-04-15',
            'duration' => '7D6N',
            'type' => 'Open Trip',
            'price' => '9500000'
        ]]);
    }
}
