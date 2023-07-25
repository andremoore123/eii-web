<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OurWorks>
 */
class OurWorksFactory extends Factory
{
    public function definition()
    {
        return [
            'work_result' => json_encode([
                ['description' => $this->faker->paragraph, 'photo_url' => 'home_photo_1.png'],
                ['description' => $this->faker->paragraph, 'photo_url' => 'home_photo_1.png'],
                ['description' => $this->faker->paragraph, 'photo_url' => 'home_photo_1.png'],
                ['description' => $this->faker->paragraph, 'photo_url' => 'home_photo_1.png'],
            ])
        ];
    }
}
