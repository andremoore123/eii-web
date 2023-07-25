<?php

namespace Database\Factories;

use App\Models\Sejarah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sejarah>
 */
class SejarahFactory extends Factory
{
    protected $model = Sejarah::class;

    public function definition()
    {
        return [
            'sejarah_singkat' => $this->faker->paragraph,
            'client_company' => json_encode([
                ['title' => '2013', 'photo_url' => 'home_photo_1.png'],
                ['title' => '2014-2015', 'photo_url' => 'home_photo_1.png'],
                ['title' => '2017', 'photo_url' => 'home_photo_1.png'],
            ]),
        ];
    }
}
