<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
            'name' => 'Laravel',
            'created_at' => Carbon\Carbon::now('America/New_York'),
            'updated_at' => Carbon\Carbon::now('America/New_York'),
      ]);
      DB::table('categories')->insert([
            'name' => 'PHP',
            'created_at' => Carbon\Carbon::now('America/New_York'),
            'updated_at' => Carbon\Carbon::now('America/New_York'),
      ]);   
      DB::table('categories')->insert([
            'name' => 'Javascript',
            'created_at' => Carbon\Carbon::now('America/New_York'),
            'updated_at' => Carbon\Carbon::now('America/New_York'),
      ]);  
      DB::table('categories')->insert([
            'name' => 'HTML5',
            'created_at' => Carbon\Carbon::now('America/New_York'),
            'updated_at' => Carbon\Carbon::now('America/New_York'),
      ]);  
      DB::table('categories')->insert([
            'name' => 'CSS3',
            'created_at' => Carbon\Carbon::now('America/New_York'),
            'updated_at' => Carbon\Carbon::now('America/New_York'),
      ]);     
    }
}
