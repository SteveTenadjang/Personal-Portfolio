<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ProfilerTelephoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $profilerIDs = DB::table('profiler_infos')->pluck('id')->toArray();
        return [
            'profiler_phone_number' => $this->faker->phoneNumber,
            'phone_number_description' => $this->faker->realText(100),
            'profiler_info_id' => $this->faker->randomElement($profilerIDs),
        ];
    }
}
