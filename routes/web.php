<?php

use App\Http\Controllers\admin\adminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\usersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\RegistationController;
use App\Http\Controllers\superAdminController;
use App\Http\Controllers\admin\IndustryController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\IndCategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\ClientelController;
use App\Http\Controllers\admin\CaseStudyController;
use App\Http\Controllers\admin\CertificateController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\CaptchaController;

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

    //Front route
    Route::get('/', [dashboardController::class, 'index']);

    Route::get('/contact', [dashboardController::class, 'contact'])->name('contact');
    Route::get('/about-us', [dashboardController::class, 'about'])->name('about');
    Route::post('contact-us-store', [dashboardController::class, 'contactstore'])->name('contact.store');
    Route::get('blogs', [dashboardController::class,'blogs'])->name('blogs');
    Route::get('blogs/{url}', [dashboardController::class, 'blogsdetail'])->name('blogdetail');
    Route::get('products/{url}', [dashboardController::class, 'product'])->name('productlist');
    Route::get('downloads', [dashboardController::class,'download'])->name('downloads');
    Route::get('/faqs', [dashboardController::class, 'faq'])->name('faqs');
    Route::get('/installation', [dashboardController::class, 'installation'])->name('installation');

Route::get('login', [dashboardController::class, 'login'])->name('login');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
Route::get('/user', [usersController::class, 'user'])->name('user');
Route::get('/admin/dashboard',[dashboardController::class, 'admin'])->name('/admin/dashboard');
Route::get('/superAdmin', [superAdminController::class, 'superAdmin'])->name('superAdmin');  

Route::get('/admin/dashboard', [adminController::class, 'admin'])->name('admin/dashboard');
Route::resource('industry', IndustryController::class);
Route::resource('category', CategoryController::class);
Route::resource('indcategory', IndCategoryController::class);
Route::resource('product', ProductController::class);
Route::resource('blog', BlogController::class);
Route::resource('clientel', ClientelController::class);
Route::resource('casestudy', CaseStudyController::class); 
Route::resource('certificate', CertificateController::class); 
Route::resource('faq', FaqController::class); 
Route::resource('service', ServiceController::class);
Route::resource('servicecategory', ServiceCategoryController::class);

Route::prefix('backend')->group(function () {
	// Route::get('home', [adminController::class, 'index'])->name('home');
});
});