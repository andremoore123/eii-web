<?php

namespace Database\Factories;

use App\Models\Home;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Home>
 */
class HomeFactory extends Factory
{
    protected $model = Home::class;

    public function definition()
    {
        return [
            'about_company' => $this->faker->paragraph,
            'list_company_location' => json_encode([
                ['title' => 'Location 1', 'description' => $this->faker->sentence],
                ['title' => 'Location 2', 'description' => $this->faker->sentence],
            ]),
            'visi_company' => $this->faker->paragraph,
            'misi_company' => json_encode([
                ['misi_company' => 'Membantu industry untuk meningkatkan mutu produk dengan upaya memperoleh data pengukuran yang benar dan akurat dari berbagai besaran fisis yang dipersyaratkan dalam proses produksi minyak dan gas.'],
                ['misi_company' => 'Meningskatkan kemampuan dan profesionalisme dengan selalu mengikuti perkembangan teknologi yang mutakhir dengan tetap mempertahankan komitmen yang tinggi terhadap pengukuran yang benar dan akurat.'],
                ['misi_company' => 'Memberikan pelayanan terbaik demi tercapainya keselamatan proses produksi dan kepuasan pelanggan.']
            ]),
            'list_core_company' => json_encode([
                ['alphabet' => 'A', 'title' => 'Core Value A', 'description' => $this->faker->sentence],
                ['alphabet' => 'B', 'title' => 'Core Value B', 'description' => $this->faker->sentence],
            ]),
        ];
    }
}
