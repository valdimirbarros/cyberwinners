<?php

use Illuminate\Database\Seeder;

class LinkPlayerGameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\LinkPlayerGame::class, 60)->create();
    }
}
