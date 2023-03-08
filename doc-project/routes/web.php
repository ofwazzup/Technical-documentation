<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\ContactsFormController;
use App\Http\Controllers\articlesController;
use App\Http\Controllers\accessController;



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

/*
| Главная страница
*/
Route::get('/', function () {
    return view('home.index');
})->name('home');

/*
| Правообладателям
*/
Route::get('/copyrights', function () {
    return view('copyrights.copyrights');
})->name('copyrights');

/*
| Инструкции
*/
Route::controller(articlesController::class)->group(function () {
    Route::get('/articlesAll', 'articlesAll')->name('articlesAll');
    Route::get('/articleCreate', 'articleCreate')->name('articleCreate');
    Route::post('/articleCreateSubmit', 'articleCreateSubmit')->name('articleCreateSubmit');

    Route::get('/article/{idArticle}/view', 'articleView')->name('articleView');
    Route::get('/article/{idArticle}/edit', 'articleEdit')->name('articleEdit');
    Route::get('/article/{idArticle}/delete', 'articleDelet')->name('articleDelete');
    Route::get('/article/{idArticle}/published', 'articlePublished')->name('articlePublished');
    Route::get('/article/{idArticle}/unPublished', 'articleUnPublished')->name('articleUnPublished');
    Route::post('/article/{idArticle}/editSubmit', 'articleEditSubmit')->name('articleEditSubmit');

    Route::get('/articlesForReview', 'articlesForReview')->name('articlesForReview');
    Route::get('/articlesInProgress', 'articlesInProgress')->name('articlesInProgress');
    Route::get('/articlesPublished', 'articlesPublished')->name('articlesPublished');

    Route::get('/articleUser', 'articleUser')->name('articleUser');
});

/*
| Разное
*/
Route::controller(accessController::class)->group(function () {
    Route::get('/accessGate', 'accessGate')->name('accessGate');
    Route::get('/accessPolitic', 'accessPolicies')->name('accessPolicies');
    Route::get('/accessMiddleware', 'accessMiddleware')->middleware('adminAccess')->name('accessMiddleware');

    Route::get('/idUserAuth', 'idUserAuth')->name('idUserAuth');
});

Route::get('/summerNote', function() {
    return view('different.summerNote');
})->name('summerNote');

/*
| Контакты
*/
Route::get('/contacts', [ContactsController::class, 'index'])->name('contact');

/*
| Обратная связь контактная форма
*/
Route::post('/contacts/submit', [ContactsFormController::class, 'submit'])->name('contact-form');


/*
| Пользователи
*/
Route::get('/users', [UsersController::class, 'index'])->middleware('auth')->name('users');

/*
| Обратная связь
*/
Route::get('/feedback', [feedbackController::class, 'index'])->name('feedback');

/*
| Написать обратную связь
*/
Route::get('/feedbackCreate', [feedbackController::class, 'feedbackCreate'])->name('feedbackCreate');
Route::post('/feedbackCreateSubmit', [feedbackController::class, 'feedbackCreateSubmit'])->name('feedbackCreateSubmit');

/*
| Авторизация
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
