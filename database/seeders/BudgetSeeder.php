<?php

namespace Database\Seeders;

use App\Models\Budget;
use App\Models\BudgetIncome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BudgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Budget::create([
            'type' => 'Operative',
            'amount' => 0,
            'remaining_amount' => 0,
            'start_date' => '1402/02/01',
            'end_date' => '1402/02/30',
            'date' => '1402/02/01',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
            'created_by' => 'Rahimullah Rahimi'
        ]);

        BudgetIncome::create([
            'budget_id' => 1,
            'amount' => 150000,
            'person_id' => 1,
            'date' => '1402/02/01',
            'description' => '',
            'created_by' => 'Mahmood'
        ]);
    }
}
