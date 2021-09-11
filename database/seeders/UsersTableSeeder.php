<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i<=0; $i++) {
            User::create([
                'name' => $faker -> name,
                'lastname' => $faker -> lastname,
                'email' => $faker -> email
            ]);
        }
    }
}
