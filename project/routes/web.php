<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\UserController;

// Auth::routes();

Route::post('auth', [PageController::class, 'login'])->name('login');
Route::get('logout', [PageController::class, 'logout'])->name('logout');

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('dashboard', [PageController::class, 'dash'])->name('dashboard');

Route::get('about-us', [PageController::class, 'about'])->name('about');

Route::get('instances-et-organes', [PageController::class, 'instance'])->name('instances');

Route::get('contactez-nous', [PageController::class, 'contact'])->name('contact');

Route::get('nos-projets', [PageController::class, 'nos_projet'])->name('nos_projet');

Route::get('nos-publications', [PageController::class, 'publication'])->name('publication');

Route::get('nos-blogs', [PageController::class, 'blog'])->name('blog');

Route::get('formulaire_members', [PageController::class, 'form_member'])->name('form_member');
Route::get('formulaire_students', [PageController::class, 'form_student'])->name('form_student');

Route::post('add_members', [PageController::class, 'store_membre'])->name('add_member');
Route::post('add_students', [PageController::class, 'store_student'])->name('add_student');

Route::resource('gestion_publication', PublicationController::class);
Route::get('single_publication/{id}', [PageController::class, 'single_pub']);
Route::get('supprimer_publication/{id}', [PublicationController::class, 'destroy']);
Route::get('type_publication/{id}', [PageController::class, 'typePub']);

Route::resource('gestion_projets', ProjetController::class);
Route::get('single_project/{id}', [PageController::class, 'single_project']);
Route::get('supprimer_project/{id}', [ProjetController::class, 'destroy']);

Route::resource('gestion_users', UserController::class);
Route::get('supprimer_user/{id}', [UserController::class, 'destroy']);
Route::get('compte_encours', [UserController::class, 'encours'])->name('encours');
Route::post('activation_user/{id}', [UserController::class, 'activer']);

Route::resource('gestion_partenaires', PartenaireController::class);
Route::get('supprimer_partenaire/{id}', [PartenaireController::class, 'destroy']);

Route::resource('gestion_newsletters', NewsletterController::class);
Route::get('supprimer_newsletter/{id}', [NewsletterController::class, 'destroy']);

Route::resource('gestion_blog', BlogController::class);
Route::get('supprimer_blog/{id}', [BlogController::class, 'destroy']);
Route::get('single_blog/{id}', [PageController::class, 'single_blog']);

Route::resource('gestion_comment', CommentController::class);

Route::get("/link", function () {
    $targetFolder = storage_path("app/public");
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder, $linkFolder);
});
