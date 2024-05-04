<?php

namespace Database\Seeders;

use App\Models\Administration;
use App\Models\Deputy;
use App\Models\Directorate;
use Illuminate\Database\Seeder;

class DeputySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Directorate::create([
            'name' => 'Directorate of Strategic Researches'
        ]);
        Deputy::create([
            'name' => 'Professional',
            'description' => 'The Deputy that manages profession part of directorate.',
            'created_by' => 'Rahimullah Rahimi',
        ]);
        Deputy::create([
            'name' => 'Supportive',
            'description' => 'The Deputy that support and provide services to professtionals.',
            'created_by' => 'Rahimullah Rahimi',
        ]);

        Administration::create([
            'name' => 'IC6',
            'deputy_id' => 1,
            'description' => '',
            'created_by' => 'Rahimullah Rahimi',
        ]);
        Administration::create([
            'name' => 'IC4',
            'deputy_id' => 1,
            'description' => '',
            'created_by' => 'Rahimullah Rahimi',
        ]);
        Administration::create([
            'name' => 'IC3',
            'deputy_id' => 1,
            'description' => '',
            'created_by' => 'Rahimullah Rahimi',
        ]);
        Administration::create([
            'name' => 'Logistic',
            'deputy_id' => 2,
            'description' => '',
            'created_by' => 'Rahimullah Rahimi',
        ]);
        Administration::create([
            'name' => 'Plan and Policy',
            'deputy_id' => 2,
            'description' => '',
            'created_by' => 'Rahimullah Rahimi',
        ]);
    }
}
