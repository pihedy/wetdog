<?php declare(strict_types=1);

use \Illuminate\Http\Request;
use \Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1', 'middleware' => ['auth:sanctum']], function () {

    Route::get('/test', function (Request $request) {
        return response()->json(["message" => "API test endpoint"]);
    });

});
