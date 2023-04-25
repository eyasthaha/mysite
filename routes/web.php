<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsletterController;
use App\Models\posts;

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



Route::get('/', [HomepageController::class, 'index'])->name('home');
Route::get('/post-page/{id}', [HomepageController::class, 'singlePage'])->name('singlePage');

Route::get('/admin-login', [HomepageController::class, 'adminLogin'])->name('adminLogin');
Route::post('/admin-login', [AdminController::class, 'login'])->name('adminLogin.post');
Route::post('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register/user', [UserController::class, 'userReg'])->name('register.user');
Route::post('/user/login', [UserController::class, 'userLogin'])->name('user.login');
Route::get('/about-us', [HomepageController::class, 'aboutus'])->name('aboutus');

Route::post('/comment/add', [CommentsController::class, 'create'])->name('comment.add');

Route::post('/newsletter/add', [NewsletterController::class, 'addSubs'])->name('newsletter.add');
Route::get('/send', [NewsletterController::class, 'SendMail'])->name('mail.send');


Route::middleware('auth')->group(function() {

    Route::get('/admin-logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index'); 
    Route::get('/post/add', [PostController::class, 'index'])->name('post.index');
    Route::post('/post/add', [PostController::class, 'addPost'])->name('post.addPost');
    Route::get('/post/edit/{id}', [PostController::class, 'editPost'])->name('post.editPost');
    Route::get('/post/delete/{id}', [PostController::class, 'deletePost'])->name('post.deletePost');

    Route::get('/post/all', [PostController::class, 'getPosts'])->name('post.allPosts');

    Route::post('/gallery/add', [GalleryController::class, 'addGallery'])->name('gallery.add');
    Route::get('/gallery/get', [GalleryController::class, 'getGallery'])->name('gallery.get');
});

Route::middleware('client')->group(function() {
    Route::get('/user/logout', [UserController::class, 'logoutUser'])->name('user.logout');

});

// Auth::routes();
Route::get('/mail', function () {
    // $post = posts::where('id',1)->first();

    //     $mailData = [
    //         'id' => 1,
    //         'title' => $post->title,
    //         'content' => $post->content,
    //         'featured' => $post->featured_image
    //     ];

    return view('reusable.mail_template');
});