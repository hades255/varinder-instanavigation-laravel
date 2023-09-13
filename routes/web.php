<?php

use App\Http\Controllers\ProfileCtr;
use Illuminate\Support\Facades\Route;

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
    return view('pages.home');
})->name('home');

Route::get('/view-instagram-stories', function () {
    return view('pages.view-instagram-stories');
})->name('view-instagram-stories');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/about-project', function () {
    return view('pages.about-project');
})->name('about-project');

Route::get('/features', function () {
    return view('pages.features');
})->name('features');

Route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');

Route::get('/terms-of-use', function () {
    return view('pages.terms-of-use');
})->name('terms-of-use');

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy-policy');

/***************************************************************************    blog */

Route::get('/blog/interesting', function () {
    return view('pages.blog.interesting');
})->name('blog.interesting');

Route::get('/blog/interesting/{id}', function ($id) {
    return view('pages.blog.interesting.' . $id);
})->name('blog.interesting.id')->where('id', '.*');
/************************************************ */
Route::get('/blog/instructions', function () {
    return view('pages.blog.instructions');
})->name('blog.instructions');

Route::get('/blog/instructions/{id}', function ($id) {
    return view('pages.blog.instructions.' . $id);
})->name('blog.instructions.id')->where('id', '.*');
/************************************************ */
Route::get('/blog/tips', function () {
    return view('pages.blog.tips');
})->name('blog.tips');

Route::get('/blog/tips/{id}', function ($id) {
    return view('pages.blog.tips.' . $id);
})->name('blog.tips.id')->where('id', '.*');

/***************************************************************************    view */
Route::get('/user-profile/{id}', [ProfileCtr::class, 'index'])->name('user-profile');
