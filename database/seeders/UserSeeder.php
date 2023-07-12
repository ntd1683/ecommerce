<?php

namespace Database\Seeders;

use App\Enums\UserLevelEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $arr = [];
        $faker = \Faker\Factory::create('vi_VN');
        for ($i = 1; $i <= 10; $i++) {
            $arr[] = [
                'name' => $faker->firstName . ' ' . $faker->lastName,
                'birthdate' => $faker->dateTime,
                'gender' => $faker->boolean,
                'level' => $faker->randomElement(UserLevelEnum::getValues()),
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'password' => Hash::make('12345678'),
                'remember_token' => null,
            ];
        }
        User::insert($arr);
    }
}
