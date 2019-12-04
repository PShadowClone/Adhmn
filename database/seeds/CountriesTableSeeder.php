<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = \Illuminate\Support\Facades\Storage::disk('local')->get('countries.json');
        $countries = json_decode($countries);
        foreach ($countries as $country) {
            \Core\Country\Models\Country::create([
                'name' => $country->name,
                'code' => $country->code
            ]);
        }
    }
}
