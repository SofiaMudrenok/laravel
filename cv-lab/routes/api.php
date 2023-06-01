<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\AutoCollection;
use App\Http\Resources\AutoResource;
use App\Models\Auto;
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
Route::get('/auto', function () {
    return new AutoCollection(Auto::paginate(2));
})->middleware('auth:api');

Route::middleware('auth:api')->group(function () {
    Route::get('/auto/{id}', function (string $id) {
        return new AutoResource(Auto::findOrFail($id));
    });

    Route::post('posts',  function () {return ["status"=>"ok"];});
});
