<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function owner()
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => 'bavly wagih samir',
                'email' => 'bavlywagih696@gmail.com',
                'phone' => '01063325054',
                'birthday' =>'1-7-2008',
                'role' => '3',
                'email_verified_at' => now(),
                'password' => Hash::make('172008'),
                'remember_token' => Str::random(10),
            ];
        });
    }

    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'remember_token' => Str::random(10),
            'created_at' => now()->subDays(rand(0, 7)),
            'updated_at' => now()->subDays(rand(0, 7)),
        ];
    }

    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
