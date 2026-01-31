<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| API ini dibuat berdasarkan BRD.md dan SLR.md
| Sistem: Aplikasi Web Perencanaan Bisnis
*/

// API Profil Perusahaan / Sistem
Route::get('/company', function () {
    return response()->json([
        'name' => 'Business Planning System',
        'description' => 'Aplikasi web perencanaan bisnis berbasis Laravel',
        'year' => 2026
    ]);
});

// API Menu Navigasi
Route::get('/menus', function () {
    return response()->json([
        ['title' => 'Home', 'url' => '/'],
        ['title' => 'About', 'url' => '/about'],
        ['title' => 'Services', 'url' => '/services'],
        ['title' => 'Contact', 'url' => '/contact']
    ]);
});

// API Layanan / Modul Bisnis
Route::get('/services', function () {
    return response()->json([
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
        ]
    ]);
});
