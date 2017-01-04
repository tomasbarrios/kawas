<?php

use Illuminate\Database\Seeder;

class CoffeeOriginsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $coffeeOrigin = factory(App\Models\CoffeeOrigin::class, 2)->create();
        $coffeeOrigins = factory(App\Models\CoffeeOrigin::class)->create([
            'title' => 'Burundi',
        ]);
    }
}
