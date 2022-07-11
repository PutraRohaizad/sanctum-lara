<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/tokens/create', function (Request $request) {
    $user = User::first();
    $token = $user->createToken('user_token');
    return ['token' => $token->plainTextToken];
});

Route::get('/users', function(){
    return [];
})->middleware('auth:sanctum');

