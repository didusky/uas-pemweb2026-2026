<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $menus = [
            ['title' => 'Home', 'url' => '/'],
            ['title' => 'About', 'url' => '/about'],
            ['title' => 'Services', 'url' => '/services'],
            ['title' => 'Contact', 'url' => '/contact'],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
