<?php

use App\Http\Controllers\Admin\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdmindashboardController;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\ServicesimageController;
use App\Http\Controllers\Admin\ServicesBannerController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\ServicesCategoryImageController;
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
use App\Http\Middleware\AdminAuthenticated;
use App\Http\Middleware\RedirectIfAdminAuthenticated;
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
Route::get('/services/{slug}', [HomeController::class, 'serviceDetails'])->name('serviceDetails');

Route::get('/home-services', [HomeController::class, 'home_services'])->name('home-services');
Route::get('/office-services', [HomeController::class, 'office_services'])->name('office-services');
Route::get('/retail-services', [HomeController::class, 'retail_services'])->name('retail-services');
Route::post('/booking',[HomeController::class,'booking'])->name('booking');

// Route::get('/architecture', [HomeController::class, 'architecture'])->name('architecture');
// Route::get('/hvac-consultation', [HomeController::class, 'hvac_consultation'])->name('hvac-consultation');
// Route::get('/design-consultation', [HomeController::class, 'design_consultation'])->name('design-consultation');
// Route::get('/electrical-consultation', [HomeController::class, 'electrical_consultation'])->name('electrical-consultation');
// Route::get('/contractor', [HomeController::class, 'contractor'])->name('contractor');
// Route::get('/structural-consultation', [HomeController::class, 'structural_consultation'])->name('structural-consultation');
// Route::get('/carpentry-masonry', [HomeController::class, 'carpentry_masonry'])->name('carpentry-masonry');
// Route::get('/painting', [HomeController::class, 'painting'])->name('painting');

Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/blog-details/{id}', [HomeController::class, 'blog_details'])->name('blog-details');

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');

Route::get('/user-dashboard', [DashboardController::class, 'index'])->name('user-dashboard');
Route::get('/partner-dashboard', [DashboardController::class, 'partner_dashboard'])->name('partner-dashboard');


Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');

Route::controller(AuthOtpController::class)->group(function(){
    Route::get('/otp/login', 'login')->name('otp.login');
    Route::post('/otp/generate', 'generate')->name('otp.generate');
    Route::post('/otp/verification', 'verification')->name('otp.verification');
    Route::post('/otp/login', 'loginWithOtp')->name('otp.getlogin');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {
        // Your admin login route goes here
        Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
        Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    });

    Route::group(['middleware' => 'adminauth'], function () {

        Route::get('/logout', [AdminAuthController::class, 'adminLogout'])->name('admin.logout');

        Route::get('/dashboard', [AdmindashboardController::class, 'dashboard'])->name('adminDashboard');

        //Service route
        Route::get('/categorielist', [CategorieController::class, 'list'])->name('Categorielist');
        Route::get('/categorieadd', [CategorieController::class, 'add'])->name('Categorieadd');
        Route::post('/categorieaddpost', [CategorieController::class, 'addpost'])->name('Categorieaddpost');
        Route::get('/categorieedit/{id}', [CategorieController::class, 'edit'])->name('Categorieedit');
        Route::post('/categoryeditpost/{id}', [CategorieController::class, 'editCategory'])->name('Categoryeditpost');
        Route::get('category/delete/{id}', [CategorieController::class, 'destroy'])->name('category.destroy');

        //Service image route
        Route::get('/serviceimagelist', [ServicesimageController::class, 'list'])->name('Serviceimagelist');
        Route::get('/searchserviceimagelist/{id}', [ServicesimageController::class, 'list'])->name('searchServiceImageList');
        Route::get('/serviceimageadd', [ServicesimageController::class, 'add'])->name('Serviceimageadd');
        Route::post('/serviceimageaddpost', [ServicesimageController::class, 'addpost'])->name('Serviceimageaddpost');
        Route::get('/serviceimageedit/{id}', [ServicesimageController::class, 'edit'])->name('Serviceimageedit');
        Route::post('/serviceimageeditpost/{id}', [ServicesimageController::class, 'saveServiceImage'])->name('ServiceImageEditPost');
        Route::get('serviceimage/delete/{id}', [ServicesimageController::class, 'destroy'])->name('serviceimage.destroy');

         //Service banner route
         Route::get('/servicebannerlist', [ServicesBannerController::class, 'list'])->name('Servicebannerlist');
         Route::get('/searchservicebannerlist/{id}', [ServicesBannerController::class, 'list'])->name('searchServiceBannerList');
         Route::get('/servicebanneradd', [ServicesBannerController::class, 'add'])->name('Servicebanneradd');
         Route::post('/servicebanneraddpost', [ServicesBannerController::class, 'addpost'])->name('Servicebanneraddpost');
         Route::get('/servicebanneredit/{id}', [ServicesBannerController::class, 'edit'])->name('Servicebanneredit');
         Route::post('/servicebannereditpost/{id}', [ServicesBannerController::class, 'saveServiceImage'])->name('ServiceBannerEditPost');
         Route::get('servicebanner/delete/{id}', [ServicesBannerController::class, 'destroy'])->name('servicebanner.destroy');
        
        //Service sub-category route
        Route::get('/servicecategorylist', [ServiceCategoryController::class, 'list'])->name('Servicecategorylist');
        Route::get('/searchservicecategorylist/{id}', [ServiceCategoryController::class, 'list'])->name('searchServiceCatList');
        Route::get('/servicecategoryadd', [ServiceCategoryController::class, 'add'])->name('Servicecategoryadd');
        Route::post('/servicecategoryaddpost', [ServiceCategoryController::class, 'addpost'])->name('Servicecategoryaddpost');
        Route::get('/servicecategoryedit/{id}', [ServiceCategoryController::class, 'edit'])->name('Servicecategoryedit');
        Route::post('/servicecategoryeditpost/{id}', [ServiceCategoryController::class, 'saveServiceCategory'])->name('ServiceCategoryEditPost');
        Route::get('servicecategory/delete/{id}', [ServiceCategoryController::class, 'destroy'])->name('servicecategory.destroy');

        //Service sub-category image route
        Route::get('servicecategory/{category}/images', [ServicesCategoryImageController::class, 'index'])->name('ServiceCatimagelist');
        Route::get('servicecategory/{category}/images/create', [ServicesCategoryImageController::class, 'create'])->name('ServiceCatimageadd');
        Route::post('servicecategory/{category}/images', [ServicesCategoryImageController::class, 'store'])->name('ServiceCatimageaddpost');
        Route::get('editservicecategory/{category}/images/{image}', [ServicesCategoryImageController::class, 'edit'])->name('ServiceCatimageedit');
        Route::post('servicecategory/{category}/images/{image}', [ServicesCategoryImageController::class, 'update'])->name('ServiceCatImageEditPost');
        Route::get('servicecategory/{category}/image-delete/{image}', [ServicesCategoryImageController::class, 'destroy'])->name('ServiceCatimageDestroy');

        //Service sub-category image route
        // Route::get('/servicecatimagelist', [ServicesCategoryImageController::class, 'list'])->name('ServiceCatimagelist');
        // Route::get('/servicecatimageadd', [ServicesCategoryImageController::class, 'add'])->name('ServiceCatimageadd');
        // Route::post('/servicecatimageaddpost', [ServicesCategoryImageController::class, 'addpost'])->name('ServiceCatimageaddpost');
        // Route::get('/servicecatimageedit/{id}', [ServicesCategoryImageController::class, 'edit'])->name('ServiceCatimageedit');
        // Route::post('/servicecatimageeditpost/{id}', [ServicesCategoryImageController::class, 'saveServiceCatImage'])->name('ServiceCatImageEditPost');
        // Route::get('servicecatimage/delete/{id}', [ServicesCategoryImageController::class, 'destroy'])->name('ServiceCatimage.destroy');

        Route::get('/customer-list', [UserController::class, 'customerlist'])->name('customerlist');
        Route::get('/partner-list', [UserController::class, 'partnerlist'])->name('partnerlist');
        Route::get('/view-user',[UserController::class,'viewCustomer'])->name('viewcustomer');
        Route::post('/update-status/',[UserController::class,'updateStatus'])->name('updatestatus');


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

        Route::get('/bookings',[BookingController::class,'bookings'])->name('bookings');

    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
