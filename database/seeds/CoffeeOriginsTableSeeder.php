<?php

use Illuminate\Database\Seeder;

class CoffeeOriginsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $coffeeOrigin = factory(App\Models\CoffeeOrigin::class)->create();
        
        $coffeeOrigins = factory(App\Models\CoffeeOrigin::class)->create([
            'title' => 'Burundi',
            'country' => 'Burundi'
        ]);
        // $coffeeOrigins = factory(App\User::class)->create([
        //     'name' => 'Etiopía',
        //     'country' => 'Etiopía'
        // ]);
        // $coffeeOrigins = factory(App\User::class)->create([
        //     'name' => 'Atitlan',
        //     'country' => 'Honduras'
        // ]);
    }
}
