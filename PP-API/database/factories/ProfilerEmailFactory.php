<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ProfilerEmailFactory extends Factory
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
            'profiler_email' => $this->faker->email,
            'email_description' => $this->faker->realText(300),
            'profiler_info_id' => $this->faker->randomElement($profilerIDs),
        ];
    }
}
