<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

Route::get('/', function () {
    // Ganti tanggal di bawah ini sesuai tanggal jadian kalian (Format: YYYY-MM-DD)
    $startDate = Carbon::parse('2025-11-19'); 
    $daysTogether = (int)$startDate->diffInDays(now());

    return view('home', compact('daysTogether', 'startDate'));
})->name('home');

Route::get('/story', function () {
    return view('story');
})->name('story');

Route::get('/album', function () {
    // Pastikan foto-foto ini disimpan di folder public/images/
    $photos = [
        [
            'title' => 'Chapter One',
            'date' => 'Nov 2025',
            'image' => 'foto1.jpg',
            'caption' => 'Catatan singkat untuk foto pertama.'
        ],
        [
            'title' => 'Afternoon Walk',
            'date' => 'Feb 2026',
            'image' => 'foto2.jpg',
            'caption' => 'Catatan singkat untuk foto kedua.'
        ],
        [
            'title' => 'Favorite Frame',
            'date' => 'Aug 2026',
            'image' => 'foto3.jpg',
            'caption' => 'Catatan singkat untuk foto ketiga.'
        ],
    ];

    return view('album', compact('photos'));
})->name('album');

Route::get('/letter', function () {
    return view('letter');
})->name('letter');