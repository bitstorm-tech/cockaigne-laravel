<?php

use App\Livewire\DealsOverview;
use App\Livewire\Home;
use App\Livewire\Map;
use App\Livewire\TopDeals;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Home::class);
Route::get('/top-deals', TopDeals::class);
Route::get('/deal-overview', DealsOverview::class);
Route::get('/map', Map::class);
