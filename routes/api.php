<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\Palindrome;
use App\Http\Controllers\Seconds;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hello', [FirstController::class, 'sayHello'])->name("say-hello");
Route::get('/palindrome', [Palindrome::class, 'checkPalindromeNumber'])->name("check-palindrome-number");
Route::get('/seconds', [Seconds::class, 'secondsNumber'])->name("seconds-number");