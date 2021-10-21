<?php

use App\Http\Controllers\API\RoleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::apiResources(['role' => RoleController::class], [
//     'only' => ["index", "show", "store", "update", "destroy"]
// ]);

Route::middleware('auth:api')->group(function () {
    Route::apiResources(['role' => RoleController::class], [
        'only' => ["index", "show", "store", "update", "destroy"]
    ]);
});


// JANGAN LUPA amr:getAllRoutes setiap nambahin route
// JANGAN LUPA KASIH ROUTE NAME AS JIKA ROUTE BUKAN RESOURCE
// NAMA ROUTE YANG HANYA AKAN DI TAMPILKAN PADA MANAJEMEN SIDEBAR HANYA YANG 
    //   INDEX DAN CREATE MAKA HATI HATI DALAM MEMBUAT ROUTE  



    // Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    //     return $request->user();
    // });
