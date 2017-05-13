<?php

use Illuminate\Database\Seeder;

class IdentitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('identities')->delete();

        DB::table('identities')->insert([
            'name' => 'Branding',
            'created_at' => Carbon\Carbon::now('America/New_York'),
            'updated_at' => Carbon\Carbon::now('America/New_York'),
        ]);
        DB::table('identities')->insert([
            'name' => 'Graphics',
            'created_at' => Carbon\Carbon::now('America/New_York'),
            'updated_at' => Carbon\Carbon::now('America/New_York'),
        ]);
        DB::table('identities')->insert([
            'name' => 'Logos',
            'created_at' => Carbon\Carbon::now('America/New_York'),
            'updated_at' => Carbon\Carbon::now('America/New_York'),
        ]);
        DB::table('identities')->insert([
            'name' => 'UI',
            'created_at' => Carbon\Carbon::now('America/New_York'),
            'updated_at' => Carbon\Carbon::now('America/New_York'),
        ]);
        DB::table('identities')->insert([
            'name' => 'Web',
            'created_at' => Carbon\Carbon::now('America/New_York'),
            'updated_at' => Carbon\Carbon::now('America/New_York'),
        ]);

    }
}