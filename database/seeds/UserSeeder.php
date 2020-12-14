<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([[
            'username' => 'admin',
            'name' => 'admin',
            'email' => 'admin@travelgram.com',
            'email_verified_at' => '2020-12-01',
            'password' => bcrypt('123'),
            'roles' => 'ADMIN'
        ],
        [
            'username' => 'user',
            'name' => 'user',
            'email' => 'user@travelgram.com',
            'email_verified_at' => '2020-12-01',
            'password' => bcrypt('123'),
            'roles' => 'USER'
        ]]);
    }
}
