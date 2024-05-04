<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\{UserSeeder, CurrencySeeder, BudgetSeeder, PersonSeeder, DeputySeeder};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(DeputySeeder::class);
        $this->call(PersonSeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(BudgetSeeder::class);
    }
}
