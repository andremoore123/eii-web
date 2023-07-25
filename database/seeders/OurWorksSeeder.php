<?php

namespace Database\Seeders;

use App\Models\OurWorks;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OurWorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OurWorks::factory()->create();
    }
}
