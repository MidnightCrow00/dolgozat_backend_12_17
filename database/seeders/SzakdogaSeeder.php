<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Szakdogak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SzakdogaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();
        for($i=0; $i<10;$i++){
            Szakdogak::create([
                'szakdoga_neve'=>$faker->word(),
                'githublink'=>$faker->word(),
                'oldallink'=>$faker->word(),
                'tagokneve'=>$faker->word()
            ]);
        }
    }
}
