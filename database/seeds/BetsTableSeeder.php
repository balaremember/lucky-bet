<?php

use Illuminate\Database\Seeder;

class BetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Bet::class, 50)->create();
    }
}
