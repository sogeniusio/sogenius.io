<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'name' => 'Link',
            'created_at' => Carbon\Carbon::now('America/New_York'),
            'updated_at' => Carbon\Carbon::now('America/New_York'),
        ]);        

        DB::table('types')->insert([
            'name' => 'Display',
            'created_at' => Carbon\Carbon::now('America/New_York'),
            'updated_at' => Carbon\Carbon::now('America/New_York'),
        ]);
    }
}
