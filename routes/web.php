<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdmindashboardController;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\ServicesimageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthOtpController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\TestimonialsController;
use App\Http\Controllers\Admin\ContactusController;
use App\Http\Controllers\Admin\AboutusController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomAuthController;
use App\Models\Blog;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/partner-with-us', [HomeController::class, 'partner_with_us'])->name('partnerwithus');
Route::post('/partner-with-us-form-data', [HomeController::class, 'partner_with_us_form_data'])->name('partnerwithusformdata');
Route::get('/about-us', [HomeController::class, 'about_us'])->name('about-us');
Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('contact-us');
Route::get('/home-services', [HomeController::class, 'home_services'])->name('home-services');
Route::get('/office-services', [HomeController::class, 'office_services'])->name('office-services');
Route::get('/retail-services', [HomeController::class, 'retail_services'])->name('retail-services');

Route::get('/interior-decoration', [HomeController::class, 'interior_decoration'])->name('interior-decoration');
Route::get('/design-plan-architecture', [HomeController::class, 'design_plan_architecture'])->name('design-plan-architecture');
Route::get('/electrical-lighting', [HomeController::class, 'electrical_lighting'])->name('electrical-lighting');
Route::get('/plumbing', [HomeController::class, 'plumbing'])->name('plumbing');
Route::get('/structural', [HomeController::class, 'structural'])->name('structural');
Route::get('/flooring', [HomeController::class, 'flooring'])->name('flooring');
Route::get('/carpentry-masonry', [HomeController::class, 'carpentry_masonry'])->name('carpentry-masonry');
Route::get('/painting', [HomeController::class, 'painting'])->name('painting');

Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/blog-details/{id}', [HomeController::class, 'blog_details'])->name('blog-details');

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');

Route::get('/user-dashboard', [DashboardController::class, 'index'])->name('user-dashboard');
Route::get('/partner-dashboard', [DashboardController::class, 'partner_dashboard'])->name('partner-dashboard');





//Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');

Route::controller(AuthOtpController::class)->group(function(){
    Route::get('/otp/login', 'login')->name('otp.login');
    Route::post('/otp/generate', 'generate')->name('otp.generate');
    Route::post('/otp/verification', 'verification')->name('otp.verification');
    Route::post('/otp/login', 'loginWithOtp')->name('otp.getlogin');
});


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    Route::group(['middleware' => 'adminauth'], function () {

        Route::get('/dashboard', [AdmindashboardController::class, 'dashboard'])->name('adminDashboard');

        Route::get('/categorielist', [CategorieController::class, 'list'])->name('Categorielist');
        Route::get('/categorieadd', [CategorieController::class, 'add'])->name('Categorieadd');
        Route::post('/categorieaddpost', [CategorieController::class, 'addpost'])->name('Categorieaddpost');
        Route::get('/categorieedit/{id}', [CategorieController::class, 'edit'])->name('Categorieedit');


        Route::get('/serviceimagelist', [ServicesimageController::class, 'list'])->name('Serviceimagelist');
        Route::get('/serviceimageadd', [ServicesimageController::class, 'add'])->name('Serviceimageadd');
        Route::post('/serviceimageaddpost', [ServicesimageController::class, 'addpost'])->name('Serviceimageaddpost');
        Route::get('/serviceimageedit/{id}', [ServicesimageController::class, 'edit'])->name('Serviceimageedit');


        Route::get('/customer-list', [UserController::class, 'customerlist'])->name('customerlist');
        Route::get('/partner-list', [UserController::class, 'partnerlist'])->name('partnerlist');


        Route::get('/bloglist', [BlogController::class, 'list'])->name('bloglist');
        Route::get('/blogadd', [BlogController::class, 'add'])->name('blogadd');
        Route::post('/blogaddpost', [BlogController::class, 'addpost'])->name('blogaddpost');
        Route::get('/blogedit/{id}', [BlogController::class, 'edit'])->name('blogedit');
        Route::post('/blogeditpost/{id}', [BlogController::class, 'editpost'])->name('blogeditpost');
        Route::get('blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

        Route::get('/testimonialslist', [TestimonialsController::class, 'list'])->name('testimonialslist');
        Route::get('/testimonialsadd', [TestimonialsController::class, 'add'])->name('testimonialsadd');
        Route::post('/testimonialsaddpost', [TestimonialsController::class, 'addpost'])->name('testimonialsaddpost');
        Route::get('/testimonialsedit/{id}', [TestimonialsController::class, 'edit'])->name('testimonialsedit');
        Route::post('/testimonialseditpost/{id}', [TestimonialsController::class, 'editpost'])->name('testimonialseditpost');
        Route::get('testimonials/delete/{id}', [TestimonialsController::class, 'destroy'])->name('testimonials.destroy');


        Route::get('/aboutus', [AboutusController::class, 'index'])->name('aboutus');
        Route::post('/aboutuseditpost/{id}', [AboutusController::class, 'editpost'])->name('aboutuseditpost');

        Route::get('/contactus', [ContactusController::class, 'index'])->name('contactus');
        Route::post('/contactuseditpost/{id}', [ContactusController::class, 'editpost'])->name('contactuseditpost');


    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
