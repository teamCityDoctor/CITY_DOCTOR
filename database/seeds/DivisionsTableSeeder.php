<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     foreach (Helpers::DIVISIONS as $index => $division) {
       DB::table('divisions')->insert([
          'id' => $index,
          'name' => $division,
          'slug' => str_slug($division),
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
     }
    }
}
