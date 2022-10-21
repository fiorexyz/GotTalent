<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Category::factory()->create([
            'type' => 'Deportivo'
        ]);

        Category::factory()->create([
            'type' => 'Arte'
        ]);

        Category::factory()->create([
            'type' => 'Musica'
        ]);

        Category::factory()->create([
            'type' => 'Gastronomia'
        ]);

        SubCategory::factory()->create([
            'category_id' => 1,
            'type' =>'Futbol'
        ]);

        SubCategory::factory()->create([
            'category_id' => 1,
            'type' => 'Basketball'
        ]);

        SubCategory::factory()->create([
            'category_id' => 1,
            'type' => 'Volleyball'
        ]);

        SubCategory::factory()->create([
            'category_id' => 2,
            'type' => 'Pintura'
        ]);

        SubCategory::factory()->create([
            'category_id' => 2,
            'type' => 'Dibujo'
        ]);

        SubCategory::factory()->create([
            'category_id' => 2,
            'type' => 'Canto'
        ]);

        SubCategory::factory()->create([
            'category_id' => 2,
            'type' => 'Instrumento'
        ]);

        SubCategory::factory()->create([
            'category_id' => 2,
            'type' => 'Fotografia'
        ]);

        SubCategory::factory()->create([
            'category_id' => 2,
            'type' => 'Poesia'
        ]);

        SubCategory::factory()->create([
            'category_id' => 2,
            'type' => 'Actuacion'
        ]);

        SubCategory::factory()->create([
            'category_id' => 2,
            'type' => 'Croche'
        ]);

        SubCategory::factory()->create([
            'category_id' => 2,
            'type' => 'Baile'
        ]);
    }
}
