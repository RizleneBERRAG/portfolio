<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Pages FR
|--------------------------------------------------------------------------
*/

Route::view('/', 'pages.home')->name('home');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');

Route::view('/cv', 'pages.cv')->name('cv');
Route::view('/motivation', 'pages.motivation')->name('motivation');
Route::view('/contact', 'pages.contact')->name('contact');


/*
|--------------------------------------------------------------------------
| Pages EN
|--------------------------------------------------------------------------
*/

Route::view('/en', 'pages.en.home')->name('home.en');

Route::get('/en/projects', function () {
    $projects = config('projects');
    return view('projects.en.index', compact('projects'));
})->name('projects.en.index');

Route::get('/en/projects/{slug}', function (string $slug) {
    $projects = collect(config('projects'));
    $project = $projects->firstWhere('slug', $slug);
    abort_if(!$project, 404);
    return view('projects.en.show', compact('project'));
})->name('projects.en.show');

Route::view('/en/cv', 'pages.en.cv')->name('cv.en');
Route::view('/en/motivation', 'pages.en.motivation')->name('motivation.en');
Route::view('/en/contact', 'pages.en.contact')->name('contact.en');


/*
|--------------------------------------------------------------------------
| Téléchargements
|--------------------------------------------------------------------------
*/

Route::get('/download/cv', function () {
    $path = public_path(config('profile.files.cv'));
    abort_if(!file_exists($path), 404);
    return response()->download($path, 'CV_Rizlene_Berrag.pdf');
})->name('download.cv');

Route::get('/download/motivation', function () {
    $path = public_path(config('profile.files.motivation'));
    abort_if(!file_exists($path), 404);
    return response()->download($path, 'Lettre_Motivation_Rizlene_Berrag.pdf');
})->name('download.motivation');
