<?php

use App\Http\Controllers\Api\V1\AboutController;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\ServiceController;
use App\Http\Controllers\Api\V1\SkillController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function (){
    //Auth
    Route::post('register',[AuthController::class , 'register'])->name('register');
    Route::post('login',[AuthController::class , 'login'])->name('login');

    // About
    Route::get('/edit-about',[AboutController::class,'edit_about']);
    Route::post('/update-about/{id}',[AboutController::class,'update_about']);

    //Service
    Route::get('get-all-services' , [ServiceController::class , 'get_all_services']);
    Route::post('create-service' , [ServiceController::class , 'create_service']);
    Route::post('update-service/{id}' , [ServiceController::class , 'update_service']);
    Route::get('delete-service/{id}' , [ServiceController::class , 'delete_service']);

    // Skill
    Route::get('get-all-skills',[SkillController::class , 'get_all_skills']);
    Route::post('create-skill', [SkillController::class , 'create_skill']);
});



