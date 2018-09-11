<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      foreach (Helpers::DIVISIONS_WITH_CITY as $division_id => $division) {
       foreach ($division as $city) {
         DB::table('cities')->insert([
            'name' => $city,
            'division_id' => $division_id,
            'slug' => str_slug($city),
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
       }
      }
    }
}
