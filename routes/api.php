<?php

use App\Http\Controllers\Api\V1\AboutController;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\EducationController;
use App\Http\Controllers\Api\V1\ExperienceController;
use App\Http\Controllers\Api\V1\MessageController;
use App\Http\Controllers\Api\V1\ProjectController;
use App\Http\Controllers\Api\V1\ServiceController;
use App\Http\Controllers\Api\V1\SkillController;
use App\Http\Controllers\Api\V1\TestimonialController;
use App\Http\Controllers\Api\V1\UserController;
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
    Route::post('update-skill/{id}', [SkillController::class , 'update_skill']);
    Route::get('delete-skill/{id}' , [SkillController::class , 'delete_skill']);

    // Education
    Route::get('get-all-educations',[EducationController::class , 'get_all_educations']);
    Route::post('create-education', [EducationController::class , 'create_education']);
    Route::post('update-education/{id}', [EducationController::class , 'update_education']);
    Route::get('delete-education/{id}' , [EducationController::class , 'delete_education']);

    //Experience
    Route::get('get-all-experiences' , [ExperienceController::class , 'get_all_experiences']);
    Route::post('create-experience', [ExperienceController::class , 'create_experience']);
    Route::post('update-experience/{id}' , [ExperienceController::class, 'update_experience']);
    Route::get('delete-experience/{id}' , [ExperienceController::class , 'delete_experience']);

    //projects
    Route::get('get-all-projects', [ProjectController::class , 'get_all_project']);
    Route::post('create-project' , [ProjectController::class , 'create_project']);
    Route::get('get-edit-project/{id}',[ProjectController::class , 'get_edit_project']);
    Route::post('update-project/{id}',[ProjectController::class , 'update_project']);
    Route::get('delete-project/{id}' , [ProjectController::class , 'delete_project']);

    // testimonials
    Route::get('get-all-testimonial',[TestimonialController::class,'get_all_testimonial']);
    Route::post('create-testimonial',[TestimonialController::class , 'create_testimonial']);
    Route::get('get-edit-testimonial/{id}',[TestimonialController::class , 'get_edit_testimonial']);
    Route::post('update-testimonial/{id}',[TestimonialController::class , 'update_testimonial']);
    Route::get('delete-testimonial/{id}' , [TestimonialController::class , 'delete_testimonial']);

    //messages
    Route::get('get-all-messages',[MessageController::class , 'get_all_messages']);
    Route::post('change-status/{id}',[MessageController::class , 'change_status']);
    Route::get('delete-message/{id}',[MessageController::class,'delete_message']);

    //users
    Route::get('get-all-users',[UserController::class,'get_all_users']);
});



