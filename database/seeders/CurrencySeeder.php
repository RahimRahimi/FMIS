<?php

namespace Database\Seeders;

use App\Models\Currency;
use App\Models\ExchangeRate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'code' => 'AFN',
                'name' => 'Afghani'
            ],
            [
                'code' => 'USD',
                'name' => 'US Dollar'
            ],
            [
                'code' => 'TRY',
                'name' => 'Turkish Lira'
            ],
            [
                'code' => 'CNY',
                'name' => 'Yuan Renminbi'
            ],
            [
                'code' => 'IRR',
                'name' => 'Iranian Rial'
            ],
            [
                'code' => 'PKR',
                'name' => 'Pakistan Rupee'
            ],
            [
                'code' => 'QAR',
                'name' => 'Qatari Rial'
            ]
        ];

        Currency::insert($data);

        $rates = [
            [
                'currency_code' => 'AFN',
                'amount' => 77.25,
                'date' => '1402/03/01',
                'created_by' => 'Rahimullah Rahimi'
            ],
            [
                'currency_code' => 'AFN',
                'amount' => 78,
                'date' => '1402/03/02',
                'created_by' => 'Rahimullah Rahimi'

            ],
            [
                'currency_code' => 'AFN',
                'amount' => 79.45,
                'date' => '1402/03/03',
                'created_by' => 'Rahimullah Rahimi'

            ]
        ];

        ExchangeRate::insert($rates);
    }
}
