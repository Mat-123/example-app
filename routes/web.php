<?php

use App\Http\Controllers\PageNavigation;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageNavigation::class, 'index'])->name('index');

Route::get('/detail/{id}', [PageNavigation::class, 'detail'])->name('detail');

Route::get('/create', [PageNavigation::class, 'create'])->name('create');

Route::get('modify', [PageNavigation::class, 'modify'])->name('modify');

Route::get('/delete', [PageNavigation::class, 'delete'])->name('delete');
