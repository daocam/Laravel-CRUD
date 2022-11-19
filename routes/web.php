<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EtudiantController::class, 'index'])->name('etudiant.index')->middleware('auth');
Route::get('/etudiant', [EtudiantController::class, 'index'])->name('etudiant.index')->middleware('auth');
Route::get('/etudiant/{etudiant}', [EtudiantController::class, 'show'])->name('etudiant.show')->middleware('auth');

Route::get('/etudiant-create', [EtudiantController::class, 'create'])->name('etudiant.create')->middleware('auth');
Route::post('/etudiant-create', [EtudiantController::class, 'store'])->name('etudiant.store');

Route::get('/etudiant-edit/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit')->middleware('auth');
Route::put('/etudiant-edit/{etudiant}', [EtudiantController::class, 'update'])->name('etudiant.update');

Route::delete('/etudiant-edit/{etudiant}', [EtudiantController::class, 'destroy'])->name('etudiant.destroy')->middleware('auth');

Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/login', [CustomAuthController::class, 'authentication'])->name('login.authentication');

Route::get('/registration', [CustomAuthController::class, 'create'])->name('user.registration');
Route::post('/registration-store', [CustomAuthController::class, 'store'])->name('user.store');

Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard')->middleware('auth');;

Route::get('/logout', [CustomAuthController::class, 'logout'])->name('logout');

Route::get('/lang/{locale}', [LocalizationController::class, 'index'])->name('lang');

Route::get('/document-upload', [DocumentController::class, 'create'])->name('document.upload');
Route::post('/document-upload', [DocumentController::class, 'store'])->name('document.store');

Route::get('/document', [DocumentController::class, 'index'])->name('document.index');
Route::get('/document/{document}', [DocumentController::class, 'show'])->name('document.show');

Route::get('/document-edit/{document}', [DocumentController::class, 'edit'])->name('document.edit')->middleware('auth');
Route::put('/document-edit/{document}', [DocumentController::class, 'update'])->name('document.update');

Route::delete('/document-edit/{document}', [DocumentController::class, 'destroy'])->name('document.destroy')->middleware('auth');

Route::get('/document-download/{document}', [DocumentPostController::class, 'download'])->middleware('auth');

Route::get('/article', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/{articlePost}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/article-create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article-create', [ArticleController::class, 'store'])->name('article.store');

Route::get('/article-edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');
Route::put('/article-edit/{article}', [ArticleController::class, 'update'])->name('article.update');

Route::delete('/article-edit/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');

