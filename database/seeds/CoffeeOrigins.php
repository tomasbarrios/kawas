<?php

use Illuminate\Database\Seeder;

class CoffeeOrigins extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coffeeOrigin = factory(App\CoffeeOrigin::class, 2)->create();
        $user = factory(App\User::class)->create([
            'title' => 'Burundi',
        ]);
    }
}
