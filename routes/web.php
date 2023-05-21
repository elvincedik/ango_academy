<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsletterController;
use App\Models\Newsletter;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about-us', [FrontController::class, 'about'])->name('about');
Route::get('/contact-us', [FrontController::class, 'contact'])->name('contact');
Route::get('/management', [FrontController::class, 'management'])->name('management');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('gallery');
Route::get('/news-blog', [FrontController::class, 'newsBlog'])->name('news-blog');
Route::get('/blog/{id}', [FrontController::class, 'show'])->name('blog.show');

// admin
Route::prefix("admin")->middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/create-blog', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/create-blog', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('/edit/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::get('/delete/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
    Route::resource('/categories', CategoryController::class);

    Route::get('/comment/{id}', [CommentController::class, 'delete'])->name('comment.delete');
    Route::delete('/gallery/{id}', [GalleryController::class, 'delete'])->name('gallery.delete');
});

Route::get('/newsletter', [NewsletterController::class, 'index'])->name('newsletter');
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');
Route::get('/newsletter{id}', [NewsletterController::class, 'destroy'])->name('newsletter.destroy');

Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
// space for delete comment... check the middleware above
Route::post('comment/{comment}/like', [CommentController::class, 'like'])->name('comment.like');

Route::get('/create-gallery', [GalleryController::class, 'create'])->name('gallery.create');
Route::post('/create-gallery', [GalleryController::class, 'store'])->name('gallery.store');
// space for delete gallery... check the middleware above
