<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 10; $i++) {
            \DB::table('products')->insert([
                'name' => $faker->name,
                'price' => $faker->randomFloat(2, 1, 100),
                'description' => $faker->text,
                'image' => $faker->imageUrl()
            ]);
        }
    }
}
