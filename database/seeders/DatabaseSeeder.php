<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@filamentphp.com',
        ]);

        // Create a product with properties
        Product::factory()->create([
            'name' => 'Product with Properties',
            'description' => 'This product has properties.',
            'properties' => [
                'color' => 'red',
                'size' => 'small',
                'weight' => 1.5,
            ],
        ]);
        // Create a product with no properties
        Product::factory()->create([
            'name' => 'Product without Properties',
            'description' => 'This product has no properties.',
            'properties' => [],
        ]);
    }
}
