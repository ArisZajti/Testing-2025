<?php

namespace Database\Seeders;

use App\Models\Plant;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $plants = [
            ['name' => 'Monstera Deliciosa', 'species' => 'Monstera', 'description' => 'Large, split leaves. Thrives in bright, indirect light.'],
            ['name' => 'Fiddle Leaf Fig', 'species' => 'Ficus lyrata', 'description' => 'Popular indoor tree with large, violin-shaped leaves.'],
            ['name' => 'Snake Plant', 'species' => 'Sansevieria', 'description' => 'Tolerant of low light and irregular watering.'],
            ['name' => 'Spider Plant', 'species' => 'Chlorophytum comosum', 'description' => 'Easy to grow, produces baby plants on long stems.'],
            ['name' => 'Peace Lily', 'species' => 'Spathiphyllum', 'description' => 'White flowers, prefers moist soil and shade.'],
            ['name' => 'Pothos', 'species' => 'Epipremnum aureum', 'description' => 'Trailing vine, very easy to care for.'],
            ['name' => 'ZZ Plant', 'species' => 'Zamioculcas zamiifolia', 'description' => 'Glossy leaves, drought tolerant.'],
            ['name' => 'Aloe Vera', 'species' => 'Aloe', 'description' => 'Succulent with medicinal uses.'],
            ['name' => 'Rubber Plant', 'species' => 'Ficus elastica', 'description' => 'Large, shiny leaves. Prefers bright, indirect light.'],
            ['name' => 'Jade Plant', 'species' => 'Crassula ovata', 'description' => 'Succulent, symbol of good luck.'],
            ['name' => 'Boston Fern', 'species' => 'Nephrolepis exaltata', 'description' => 'Lush, feathery fronds. Likes humidity.'],
            ['name' => 'Calathea', 'species' => 'Calathea', 'description' => 'Striking leaf patterns, prefers humidity.'],
            ['name' => 'Chinese Evergreen', 'species' => 'Aglaonema', 'description' => 'Tolerates low light, colorful leaves.'],
            ['name' => 'Dracaena', 'species' => 'Dracaena', 'description' => 'Long, narrow leaves. Easy to grow.'],
            ['name' => 'Philodendron', 'species' => 'Philodendron', 'description' => 'Heart-shaped leaves, great for hanging baskets.'],
        ];
        foreach ($plants as $plant) {
            Plant::create($plant);
        }
    }
}
