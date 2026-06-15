<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sitemap.xml', function () {
    $content = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $content .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    $content .= '    <url>' . "\n";
    $content .= '        <loc>' . url('/') . '</loc>' . "\n";
    $content .= '        <lastmod>' . now()->format('Y-m-d') . '</lastmod>' . "\n";
    $content .= '        <changefreq>weekly</changefreq>' . "\n";
    $content .= '        <priority>1.0</priority>' . "\n";
    $content .= '    </url>' . "\n";
    $content .= '</urlset>';

    return response($content, 200, [
        'Content-Type' => 'application/xml',
    ]);
});