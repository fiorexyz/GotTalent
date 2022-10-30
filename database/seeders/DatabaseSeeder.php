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
        User::factory()->create([
            'name' => 'Karla Daniela Contreras Rodas',
            'email' => 'karla.contreras2023@poma.superate.org.sv',
            'age' => 17,
            'phone' => '69578801',
            'superate' => 'Fundacion Poma',
            'sub_category_id' => 5,
            'timePracticing' => 4,
            'about' => 'I do drawing because when I was a child I discovered that it was my
            safe place and it makes me happy.'
        ]);

        User::factory()->create([
            'name' => 'Cecilia del Carmen Villalta Amaya',
            'email' => 'cecilia.villalta2023@poma.superate.org.sv',
            'age' => 16,
            'phone' => '74945003',
            'superate' => 'Fundacion Poma',
            'sub_category_id' => 12,
            'timePracticing' => 2,
            'about' => 'I really enjoy dancing because is when I forget all the bad stuff and
             concentrate on enjoying the moment. When I make mistakes I appreciate
             learning from my mistakes so I can improve more and more.'
        ]);

        User::factory()->create([
            'name' => 'Angie Fiorella Alberto Guzman',
            'email' => 'angie.alberto2023@poma.superate.org.sv',
            'age' => 16,
            'phone' => '79014868',
            'superate' => 'Fundacion Poma',
            'sub_category_id' => 14,
            'timePracticing' => 2,
            'about' => 'I learnt baking with my grandmother'
        ]);

        User::factory()->create([
            'name' => 'Ana Ester Salazar Mendoza',
            'email' => 'ana.salazar2023@poma.superate.org.sv',
            'age' => 17,
            'phone' => '79546348',
            'superate' => 'Fundacion Poma',
            'sub_category_id' => 11,
            'timePracticing' => 3,
            'about' => 'I like to play the piano when I am bored or when I am really stressed'
        ]);

        User::factory()->create([
            'name' => 'Reynaldo Jose Juarez ',
            'email' => 'reynaldo.juarez2023@poma.superate.org.sv',
            'age' => 16,
            'phone' => '74309748',
            'superate' => 'Fundacion Poma',
            'sub_category_id' => 10,
            'timePracticing' => 2,
            'about' => 'When I am singing I feel like I am living'
        ]);

        User::factory()->create([
            'name' => 'Sofia Franchesca Perez',
            'email' => 'sofia.perez2023@poma.superate.org.sv',
            'age' => 16,
            'phone' => '74947514',
            'superate' => 'Fundacion Poma',
            'sub_category_id' => 4,
            'timePracticing' => 1,
            'about' => 'I love cooking because I can be creative on that'
        ]);

        User::factory()->create([
            'name' => 'Jacqueline Vanessa Mendoza ',
            'email' => 'jacqueline.mendoza2023@poma.superate.org.sv',
            'age' => 16,
            'phone' => '72268742',
            'superate' => 'Fundacion Poma',
            'sub_category_id' => 2,
            'timePracticing' => 3,
            'about' => 'I practice this sport because it helps me to have a better concentration
            and body movement.'
        ]);

        //ID: 1
        Category::factory()->create([
            'type' => 'Sports'
        ]);

        //ID: 2
        Category::factory()->create([
            'type' => 'Art'
        ]);

        //ID: 3
        Category::factory()->create([
            'type' => 'Music'
        ]);

        //ID: 4
        Category::factory()->create([
            'type' => 'Gastronomy'
        ]);

        //ID: 1
        SubCategory::factory()->create([
            'category_id' => 1,
            'type' =>'Soccer'
        ]);
        //ID 2
        SubCategory::factory()->create([
            'category_id' => 1,
            'type' => 'Basketball'
        ]);
        //ID 3
        SubCategory::factory()->create([
            'category_id' => 1,
            'type' => 'Volleyball'
        ]);
        //ID 4
        SubCategory::factory()->create([
            'category_id' => 2,
            'type' => 'Painting'
        ]);
        //ID 5
        SubCategory::factory()->create([
            'category_id' => 2,
            'type' => 'Drawing'
        ]);

        //ID 6
        SubCategory::factory()->create([
            'category_id' => 2,
            'type' => 'Fotography'
        ]);
        //ID 7
        SubCategory::factory()->create([
            'category_id' => 2,
            'type' => 'Poetry'
        ]);
        //ID 8
        SubCategory::factory()->create([
            'category_id' => 2,
            'type' => 'Performance'
        ]);
        //ID 9
        SubCategory::factory()->create([
            'category_id' => 2,
            'type' => 'Crochet'
        ]);
        //ID 10
        SubCategory::factory()->create([
            'category_id' => 3,
            'type' => 'Singing'
        ]);
        //ID 11
        SubCategory::factory()->create([
            'category_id' => 3,
            'type' => 'Playing an instrument'
        ]);
        //ID 12
        SubCategory::factory()->create([
            'category_id' => 3,
            'type' => 'Dancing'
        ]);
        //ID 13
        SubCategory::factory()->create([
            'category_id' => 4,
            'type' => 'Cooking'
        ]);
        //ID 14
        SubCategory::factory()->create([
            'category_id' => 4,
            'type' => 'Baking'
        ]);
    }
}
