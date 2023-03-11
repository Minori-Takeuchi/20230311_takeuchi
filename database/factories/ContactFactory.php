<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\DateTime;


class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->numberBetween(1,2);
        $fullname
        = $this->faker->name($gender == 1 ? 'male' : 'female');
        $address = $this->faker->prefecture(). $this->faker->city(). $this->faker->streetAddress();
    
        return [
            'fullname' => $fullname,
            'gender' => $gender,
            'email' => $this-> faker->unique()->safeEmail(),
            'postcode' => $this->faker->postcode(),
            'address' => $address,
            'building_name' => $this->faker->secondaryAddress(),
            'option' => 'ここに問い合わせ内容が入ります。ここに問い合わせ内容が入ります。',
            'created_at' => DateTime::dateTimeThisDecade()
        ];
    }
}
