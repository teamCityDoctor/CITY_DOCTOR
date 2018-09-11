<?php

use App\Hospital;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\Sluggable;
use Faker\Factory;
use Illuminate\Database\Seeder;

class HospitalsTableSeeder extends Seeder
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
      foreach (range(1, Helpers::NUMBER_OF_HOSPITAL) as $i) {
        $company = $faker->company;
        DB::table('hospitals')->insert([
          'name' => $company . ' Hospital',
          'slug' => SlugService::createSlug(Hospital::class, 'slug', $company),
          'city_id' => rand(1, Helpers::NUMBER_OF_CITY),
          'user_id' => rand(1, count(Helpers::USERS)),
          'phone' => $faker->tollFreePhoneNumber,
          'address' => $faker->address,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
      }
    }
    public function generating_slug($string)
    {
        $slug = str_slug($string);
        $latestSlug = Hospital::whereRaw("slug RLIKE '^{$slug}(-[0-9]*)?$'")
                        ->latest('id')
                        ->limit(1)
                        ->pluck('slug');
        // return ['slug' => $latestSlug];
        if (count($latestSlug) != 0) {
          $pieces = explode('-', $latestSlug);
          $number = intval( end($pieces) );
          $slug = $slug . '-' . ($number + 1);
        }
        return $slug;
    }
}
