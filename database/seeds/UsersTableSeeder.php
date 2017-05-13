<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();

        DB::table('users')->insert([
                'firstname' => 'Hosnel',
                'lastname' => 'Guerrier',
                'email' => 'hos@sogenius.io',
                'password' => bcrypt('THE216h_#1'),
                'remember_token' => 'L0fY96Ek3r30dUE9e482JwmjxV4iKYxZ4YGBcibz7Qu0eSA31dPyR0ilR5Cc',
                'created_at' => Carbon\Carbon::now('America/New_York'),
                'updated_at' => Carbon\Carbon::now('America/New_York'),
        ]);

    }
}
