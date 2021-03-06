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
        $this->call(CategoriesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(CitizensTableSeeder::class);
        $this->call(FerryPortsTableSeeder::class);
        $this->call(FerryLinesTableSeeder::class);
        $this->call(PrepaidTicketsTableSeeder::class);
    }
}
