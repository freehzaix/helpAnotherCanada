<?php

use App\Http\Controllers\AnnuaireController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ConseilAdminController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReplayWebinaireController;
use App\Http\Controllers\TypeDocumentController;
use App\Http\Controllers\WebinaireController;
use Illuminate\Support\Facades\Route;

//Pages
Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);

//PAIEMENT
Route::get('/payment/webinar', [PaymentController::class, 'form_payment'])->name('payment.webinar');
//Checkout Route
Route::get('/paiement', [CheckoutController::class, 'index'])->name('checkout.index')->middleware('auth');
// END PAIEMENT

// dashboard
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/profile', [AuthController::class, 'profile'])->name('profile')->middleware('auth');
Route::post('/profile/post', [AuthController::class, 'handle_profile'])->name('profile.post')->middleware('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// annuaire
Route::get('/list-annuaire', [AnnuaireController::class, 'listEntreprise']);
Route::get('/annuaires', [AnnuaireController::class, 'index'])->name('annuaire.index')->middleware('auth');
Route::get('/annuaire/create', [AnnuaireController::class, 'create'])->name('annuaire.create')->middleware('auth');
Route::post('/annuaire/store', [AnnuaireController::class, 'store'])->name('annuaire.store')->middleware('auth');
Route::get('/annuaire/{id}/approuve', [AnnuaireController::class, 'approuve'])->middleware('auth');
Route::get('/annuaire/{id}/deapprouve', [AnnuaireController::class, 'deapprouve'])->middleware('auth');
Route::get('/annuaire/{id}/show', [AnnuaireController::class, 'show'])->middleware('auth');
Route::post('/annuaire/update', [AnnuaireController::class, 'update'])->name('annuaire.update')->middleware('auth');

// Document
Route::get('/documents', [TypeDocumentController::class, 'index'])->name('document.index')->middleware('auth');
Route::get('/document/create', [TypeDocumentController::class, 'create'])->name('document.create')->middleware('auth');
Route::post('/document/store', [TypeDocumentController::class, 'store'])->name('document.store')->middleware('auth');
Route::get('/document/{id}/show', [TypeDocumentController::class, 'show'])->middleware('auth');
Route::get('/document/{id}/delete', [TypeDocumentController::class, 'delete'])->middleware('auth');

// webinaire
Route::get('/webinaires', [WebinaireController::class, 'index'])->name('webinaire.index')->middleware('auth');
Route::get('/webinaire/create', [WebinaireController::class, 'create'])->name('webinaire.create')->middleware('auth');
Route::post('/webinaire/store', [WebinaireController::class, 'store'])->name('webinaire.store')->middleware('auth');

// replay webinaire
Route::get('/replay-webinaires', [ReplayWebinaireController::class, 'index'])->name('replay-webinaire.index')->middleware('auth');


Route::get('/login/membre', [MembreController::class, 'form_login'])->name('login');
Route::get('/register/membre', [MembreController::class, 'form_register'])->name('register.membre');
Route::post('/register/membre/post', [MembreController::class, 'handle_register'])->name('register.membre.post');

Route::get('/login/conseil', [ConseilAdminController::class, 'form_login'])->name('login.conseil');
Route::get('/register/conseil', [ConseilAdminController::class, 'form_register'])->name('register.conseil');
Route::post('/register/conseil/post', [ConseilAdminController::class, 'handle_register'])->name('register.conseil.post');

Route::post('/login/post', [AuthController::class, 'authLogin'])->name('login.post');
