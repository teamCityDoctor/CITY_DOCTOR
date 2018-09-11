<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(UsersTableSeeder::class);
      $this->call(DivisionsTableSeeder::class);
      $this->call(CitiesTableSeeder::class);
      $this->call(DegreesTableSeeder::class);
      $this->call(DisciplinesTableSeeder::class);
      $this->call(HospitalsTableSeeder::class);
      $this->call(DoctorsTableSeeder::class);
    }
}
