<?php

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
        $this->call(GameTableSeeder::class);
        $this->call(PlayerTableSeeder::class);
        $this->call(LinkPlayerGameTableSeeder::class);

    }
}
