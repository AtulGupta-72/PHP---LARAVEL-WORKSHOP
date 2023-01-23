<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VideosBrowseController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ContactDataController;



Route::middleware(['guest:user'])->group(function () {
    Route::get('/user/register', [UsersController::class, "register"])->name('site.register');
    Route::post('/user/register', [UsersController::class, "register_process"]);
    Route::get('/user/login', [UsersController::class, "login"])->name("site.login");
    Route::post('/user/login', [UsersController::class, "login_process"]);
});

Route::middleware(['auth:user'])->group(function () {
    Route::get('/videos/upload', [VideosController::class, "upload"])->name('site.video.upload');
    Route::post('/videos/upload', [VideosController::class, "upload_process"]);    
    Route::get('/user/logout', [UsersController::class, "logout"])->name('site.logout');
});


Route::get('/', [HomeController::class, "index"])->name('site.home');
Route::get('/contact-us', [ContactController::class, "index"])->name('site.contact');
Route::post('/contact-us', [ContactController::class, "process"]);


Route::get('/videos/browse/{category_id}', [VideosBrowseController::class, "index"])->name('site.video.browse');
Route::get('/videos/details/{video}', [VideosBrowseController::class, "details"])->name('site.video.details');

//-- Admin

Route::get('/admin/login', [AdminUserController::class, "login"])->name("admin.login");
Route::post('/admin/login', [AdminUserController::class, "login_process"]);

Route::get('/admin/categories', [CategoriesController::class, "index"])->name("admin.categories");
Route::post('/admin/categories', [CategoriesController::class, "insert_category"]);

Route::get('/admin/category/delete/{category}', [CategoriesController::class, "delete"])->name("admin.categories.delete");

Route::get('/admin/contact-us-data', [ContactDataController::class, "index"])->name("admin.contact-us-data");


// Route::get('/videos/details/1', );
// public function logout() {
//     Auth::guard('user')->logout();
//     return redirect()->route('site.home');
// }


