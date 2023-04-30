<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RepertoireController;
use App\Http\Controllers\VilleController;
use App\Models\Ville;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('etudiant', [EtudiantController::class, 'index'])->name('etudiant.index');

Route::get('etudiant', [EtudiantController::class, 'index'])->name('etudiant.index');
Route::get('/etudiant/{etudiant}', [EtudiantController::class, 'show'])->name('etudiant.show');
Route::put('/etudiant/{etudiant}', [EtudiantController::class, 'update'])->name('etudiant.update');
Route::get('/etudiant-create', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('/etudiant-create', [EtudiantController::class, 'store']);
Route::get('/etudiant-edit/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('/etudiant-edit/{etudiant}', [EtudiantController::class, 'update']);
Route::delete('/etudiant/{etudiant}', [EtudiantController::class, 'destroy']);

Route::get('page', [EtudiantController::class, 'page']);

Route::get('query', [EtudiantController::class, 'query']);

Route::get('register', [CustomAuthController::class, 'create'])->name('auth.create');
Route::post('register', [CustomAuthController::class, 'store'])->name('auth.create');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('authentication', [CustomAuthController::class, 'authentication'])->name('authentication');
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

Route::get('user-list', [CustomAuthController::class, 'userList'])->name('user.list')->middleware('auth');

Route::get('lang/{locale}', [LocalizationController::class, 'index'])->name('lang');

Route::get('article', [ArticleController::class, 'index'])->name('article.index');
Route::get('article/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('article-create', [ArticleController::class, 'create'])->name('article.create');
Route::post('article-create', [ArticleController::class, 'store']);
Route::get('article-edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');
Route::put('article-edit/{article}', [ArticleController::class, 'update']);
Route::delete('article/{article}', [ArticleController::class, 'destroy']);
Route::get('page', [ArticleController::class, 'page']);

Route::get('repertoire', [RepertoireController::class, 'index'])->name('repertoire.index'); 
Route::get('/repertoire/{repertoire}', [RepertoireController::class, 'show'])->name('repertoire.show');
Route::put('/repertoire/{repertoire}', [RepertoireController::class, 'update'])->name('repertoire.update');
Route::get('/repertoire-create', [RepertoireController::class, 'create'])->name('repertoire.create'); 
Route::get('repertoire-edit/{repertoire}', [RepertoireController::class, 'edit'])->name('repertoire.edit');
Route::put('repertoire-edit/{repertoire}', [RepertoireController::class, 'update']);
Route::post('/repertoire-create', [RepertoireController::class, 'store']);
Route::delete('/repertoire/{repertoire}', [RepertoireController::class, 'destroy']);
Route::get('repertoire', [RepertoireController::class, 'page'])->name('repertoire.page')->middleware('auth');



