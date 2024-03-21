<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Models\Discuses;
use App\Models\Educations;
use App\Models\Experiences;
use App\Models\Portofolios;

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

Route::get('/', function () {
    $data = [
        'education' => Educations::all(),
        'experience' => Experiences::all(),
        'portofolio' => Portofolios::all(),
        'discus' => Discuses::orderBy('created_at', 'desc')->get(),
        'countDiscus' => Discuses::count(),
    ];
    return view('page.app', $data);
});


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/viewAddEducation', [AdminController::class, 'viewAddEducation']);
Route::post('/addEducation', [AdminController::class, 'addEducation']);
Route::get('/delEducation/{id}', [AdminController::class, 'delEducation']);

Route::get('/viewAddExperience', [AdminController::class, 'viewAddExperience']);
Route::post('/addExperience', [AdminController::class, 'addExperience']);
Route::get('/delExperience/{id}', [AdminController::class, 'delExperience']);

Route::get('/viewAddPortofolio', [AdminController::class, 'viewAddPortofolio']);
Route::post('/addPortofolio', [AdminController::class, 'addPortofolio']);
Route::get('/delPortofolio/{id}', [AdminController::class, 'delPortofolio']);

Route::post('/addDiscus', [AdminController::class, 'addDiscus']);
Route::get('/delDiscus/{id}', [AdminController::class, 'delDiscus']);
