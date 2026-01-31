<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'name' => 'Business Planning',
                'description' => 'Perencanaan strategi dan operasional bisnis'
            ],
            [
                'name' => 'Financial Analysis',
                'description' => 'Analisis keuangan untuk pengambilan keputusan'
            ],
            [
                'name' => 'Market Analysis',
                'description' => 'Analisis pasar dan peluang bisnis'
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
