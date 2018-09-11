<?php

use App\Doctor;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{
  use Sluggable;

  public function sluggable()
  {
      return [
          'slug' => [
              'source' => 'name'
          ]
      ];
  }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Factory::create();
      foreach (range(1, Helpers::NUMBER_OF_DOCTOR) as $i) {
        $name = $faker->name;
        DB::table('doctors')->insert([
          'name' => $name,
          'slug' => SlugService::createSlug(Doctor::class, 'slug', $name),
          'email' => $faker->email,
          'address' => $faker->address,
          'hospital_id' => rand(1, Helpers::NUMBER_OF_HOSPITAL),
          'degree_id' => rand(1, count(Helpers::DEGREES)),
          'discipline_id' => rand(1, count(Helpers::DISCIPLINES)),
          'user_id' => rand(1, count(Helpers::USERS)),
          'phone' => $faker->tollFreePhoneNumber,
          'address' => $faker->address,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
      }
    }
}
