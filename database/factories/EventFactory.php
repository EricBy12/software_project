<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'location' => $this->faker->streetAddress(),
            'time' => $this->faker->time(),
            'tag' => 'Beach Clean',
            'attendees' => 100,
            'group_id' => 1,
            'organizer_id' => 1,
            'attendance_restriction' => "Open",
        ];
    }
}
