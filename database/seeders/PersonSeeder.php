<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Person::create([
            'name' => 'Ahmad',
            'last_name' => 'Ahmadi',
            'father_name' => 'Haji Khan',
            'phone_no' => '0777777777',
            'province' => 'Kabul',
            'district' => 'Polcharkhi',
            'deputy_id' => 1,
            'administration_id' => 1,
            'rank' => 'Major',
            'created_by' => 'Mahmood'
        ]);

        Person::create([
            'name' => 'Zakir',
            'last_name' => 'Zakiri',
            'father_name' => 'Mohammad Khan',
            'phone_no' => '078888888',
            'province' => 'Kabul',
            'district' => 'Polcharkhi',
            'deputy_id' => 2,
            'administration_id' => 1,
            'rank' => 'Major',
            'created_by' => 'Mahmood'
        ]);
    }
}
