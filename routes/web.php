<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\AddressController;
use App\Models\Experience;

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
    return view('welcome');
});

Route::get('resumes', [ResumeController::class, 'index'])->name('resume.index');
Route::get('resumes/create', [ResumeController::class, 'create'])->name('resume.create');
Route::post('resumes', [ResumeController::class, 'store'])->name('resume.store');
Route::get('resumes/{resume}/edit', [ResumeController::class, 'edit'])->name('resume.edit');
Route::put('resumes/{resume}/update', [ResumeController::class, 'update'])->name('resume.update');
Route::delete('resumes/{resume}/destroy', [ResumeController::class, 'destroy'])->name('resume.destroy');
Route::get('resumes/{resume}/view', [ResumeController::class, 'view'])->name('resume.view');

Route::get('educations/{resume}', [EducationController::class, 'index'])->name('education.index');
Route::get('education/{resume}', [EducationController::class, 'create'])->name('education.create');
Route::post('education', [EducationController::class, 'store'])->name('education.store');
Route::get('education/{education}/edit', [EducationController::class, 'edit'])->name('education.edit');
Route::put('education/{education}/update', [EducationController::class, 'update'])->name('education.update');
Route::delete('education/{education}/destroy', [EducationController::class, 'destroy'])->name('education.destroy');

Route::get('experiences/{resume}', [ExperienceController::class, 'index'])->name('experience.index');
Route::get('experience/{resume}', [ExperienceController::class, 'create'])->name('experience.create');
Route::post('experience', [ExperienceController::class, 'store'])->name('experience.store');
Route::get('experience/{experience}/edit', [ExperienceController::class, 'edit'])->name('experience.edit');
Route::put('experience/{experience}/update', [ExperienceController::class, 'update'])->name('experience.update');
Route::delete('experience/{experience}/destroy', [ExperienceController::class, 'destroy'])->name('experience.destroy');

Route::get('skills/{resume}', [SkillsController::class, 'index'])->name('skill.index');
Route::get('skill/{resume}', [SkillsController::class, 'create'])->name('skill.create');
Route::post('skill', [SkillsController::class, 'store'])->name('skill.store');
Route::get('skill/{skill}/edit', [SkillsController::class, 'edit'])->name('skill.edit');
Route::put('skill/{skill}/update', [SkillsController::class, 'update'])->name('skill.update');
Route::delete('skill/{skill}/destroy', [SkillsController::class, 'destroy'])->name('skill.destroy');

Route::get('address/{resume}', [AddressController::class, 'create'])->name('address.create');
Route::post('address', [AddressController::class, 'store'])->name('address.store');
Route::get('address/{address}/edit', [AddressController::class, 'edit'])->name('address.edit');
Route::put('address/{address}/update', [AddressController::class, 'update'])->name('address.update');