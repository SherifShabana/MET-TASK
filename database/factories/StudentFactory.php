<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" =>$this -> faker-> name(),
            "age" =>$this -> faker-> numberBetween(18,22),
            "email" =>$this -> faker-> unique()->email(),
            "phone" =>$this -> faker-> e164PhoneNumber(),
            "address" =>$this -> faker-> address()
        ];
    }
}
