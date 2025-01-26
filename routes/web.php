<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForumController;

Route::get('/', [ForumController::class, 'forum'])->name('forum');

