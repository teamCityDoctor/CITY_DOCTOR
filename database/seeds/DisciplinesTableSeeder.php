<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DisciplinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //37 disciplines;
      foreach (Helpers::DISCIPLINES as $discipline) {
        DB::table('disciplines')->insert([
          'name' => $discipline,
          'slug' => str_slug($discipline),
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
      }
    }
}
