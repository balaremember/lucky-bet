<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->command->info('Categories created!');
        $this->call(UsersTableSeeder::class);
        $this->command->info('Users created!');
        $this->call(BetsTableSeeder::class);
        $this->command->info('Bets created!');
        $this->call(EventsTableSeeder::class);
        $this->command->info('Events created!');
        $this->call(EventsBetsTableSeeder::class);
        $this->command->info('EventsBets created!');
    }
}
