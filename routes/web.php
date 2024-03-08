<?php

use App\Livewire\StudentDeveloper;
use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use App\Livewire\Project;
use App\Livewire\About;
use App\Livewire\Faculties;
use App\Livewire\PrivacyPolicy;
use Illuminate\Support\Facades\Artisan;
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
    return view('index');
})->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/faculty', Faculties::class)->name('faculty');
Route::get('/project', Project::class)->name('project');
Route::get('/student-developer', StudentDeveloper::class)->name('student-developer');
Route::get('/privacypolicy', PrivacyPolicy::class)->name('privacypolicy');
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
