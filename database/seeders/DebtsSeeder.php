<?php
namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DebtsSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        DB::table('debts')->truncate();

        for ($i = 0; $i < 10; $i++) {
            $debts = [
                'name' => $faker->words($faker->numberBetween(1, 3), true),
                'city' => $faker->city(),
                'price' => $faker->randomNumber(3),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
            DB::table('debts')->insert($debts);
        }

    }
}
