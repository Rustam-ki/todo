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
        Eloquent::unguard();
       // $this->call(UsersTableSeeder::class);
       // $this->call(ItemsTableSeeder::class);

        $this->call('UsersTableSeeder');
        $this->call('ItemsTableSeeder');

    }
}
