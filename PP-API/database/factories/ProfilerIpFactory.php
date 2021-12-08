<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ProfilerIpFactory extends Factory
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
            'ip_name' => $this->faker->sentence,
            'ip_description' => $this->faker->realText(300),
            'ip_img' => $this->faker->image('public/storage/images/ip_images', 640, 480, null, false),
            'profiler_infos_id' => $this->faker->randomElement($profilerIDs),
        ];
    }
}