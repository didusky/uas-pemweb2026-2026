<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        Company::create([
            'name' => 'Business Planning System',
            'description' => 'Aplikasi web perencanaan bisnis berbasis Laravel',
            'year' => 2026
        ]);
    }
}
