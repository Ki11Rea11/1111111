<?php

use App\Http\Controllers\AppealController;
use App\Http\Controllers\TelegramController;
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


Route::get('/', [AppealController::class,'index']);
Route::get('/admin/appeals',[AppealController::class, 'usersAppeals'])->name('admin.usersAppeals');
Route::get('/admin/appeals/{appeal}/',[AppealController::class, 'update'])->name('appeals.update');


Route::get('/webhook/telegram', [TelegramController::class, 'handle']);
Route::get('/check', [TelegramController::class, 'checkBotConnection'])->name('bot');
