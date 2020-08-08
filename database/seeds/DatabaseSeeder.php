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
        factory(\App\User::class, 1)->create(['email' => 'hcetin@email.com']);
        factory(\App\User::class, 1)->create(['email' => 'hcetin1@email.com']);
        factory(\App\User::class, 1)->create(['email' => 'hcetin2@email.com']);
    }
}
