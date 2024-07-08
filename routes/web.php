<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Main\ViewsController::class, 'welcome'])->name('welcome');
Route::get('/game', [App\Http\Controllers\Main\GameController::class, 'game'])->name('game');
Route::post('/game/play', [App\Http\Controllers\Main\GameController::class, 'play'])->name('play');
Route::get('/edit-nickname', [App\Http\Controllers\Main\EditNickname::class, 'edit'])->name('edit');
Route::patch('/', [App\Http\Controllers\Main\EditNickname::class, 'update'])->name('update');
Route::get('/results', [App\Http\Controllers\Main\ViewsController::class, 'gamesResults'])->name('results');