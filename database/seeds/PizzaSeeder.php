<?php

use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizzas')->insert([
            [
                'pizza_name' => 'Bacon and Egg Pizza',
                'pizza_description' => 'A pizza freshly made with bacons and eggs',
                'pizza_price' => '30000',
                'pizza_image' => 'baconegg.jpg'
            ],
            [
                'pizza_name' => 'Tuna Man',
                'pizza_description' => 'A pizza with full of Tuna meat',
                'pizza_price' => '45000',
                'pizza_image' => 'tuna.jpg'
            ],
            [
                'pizza_name' => 'Veggie Pizza',
                'pizza_description' => 'A pizza with wheat and vegetables',
                'pizza_price' => '20000',
                'pizza_image' => 'veggie.jpg'
            ],
            
        ]);
    }
}
