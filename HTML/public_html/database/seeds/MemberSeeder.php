<?php

use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 30; $i++) {
            Member::create([
                'first_name' => $faker->firstNameMale,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'user_name' => $faker->email,
                'phone' => $faker->phoneNumber,
                'account_balance' => 1000000,
                'status' => 1,
            ]);
        }
    }
}
