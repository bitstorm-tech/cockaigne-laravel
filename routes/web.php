<?php

use App\Http\Controllers\SetLanguageController;
use App\Livewire\BasicVsPro;
use App\Livewire\Dealer;
use App\Livewire\DealsOverview;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Logout;
use App\Livewire\Map;
use App\Livewire\Privacy;
use App\Livewire\Signup;
use App\Livewire\Terms;
use App\Livewire\TopDeals;
use App\Livewire\User;
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
Route::get('/basic-vs-pro', BasicVsPro::class);
Route::get('/deal-overview', DealsOverview::class);
Route::get('/dealer/{dealer}', Dealer::class);
Route::get('/language/{language}', [SetLanguageController::class, 'setLanguage']);
Route::get('/login', Login::class);
Route::get('/logout', [Logout::class, 'logout']);
Route::get('/map', Map::class);
Route::get('/privacy', Privacy::class);
Route::get('/signup', Signup::class);
Route::get('/terms', Terms::class);
Route::get('/top-deals', TopDeals::class);
Route::get('/user', User::class);
