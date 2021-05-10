<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;
use Faker\Factory;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::truncate();
        //
        $faker = Factory::create();
        //
        Payment::truncate();

        for ($i = 0; $i <= 100; $i++) {
            Payment::create([
                'payment_name' => $faker->bank
               
            ]);
        }
    }
}
