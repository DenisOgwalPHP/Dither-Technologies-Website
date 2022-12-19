<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\AdminAddAmenitiesComponent;
use App\Http\Livewire\AdminAddBlogComponent;
use App\Http\Livewire\AdminAddCategoryComponent;
use App\Http\Livewire\AdminAddProjectDetailsComponent;
use App\Http\Livewire\AdminAddProjectsComponent;
use App\Http\Livewire\AdminAmenitiesComponent;
use App\Http\Livewire\AdminBlogComponent;
use App\Http\Livewire\AdminCategoryComponent;
use App\Http\Livewire\AdminContactComponent;
use App\Http\Livewire\AdminEditAmenitiesComponent;
use App\Http\Livewire\AdminEditBlogComponent;
use App\Http\Livewire\AdminEditCategoryComponent;
use App\Http\Livewire\AdminEditProjectDetailsComponent;
use App\Http\Livewire\AdminEditProjectsComponent;
use App\Http\Livewire\AdminOrderComponent;
use App\Http\Livewire\AdminProjectDetailsComponent;
use App\Http\Livewire\AdminProjectsComponent;
use App\Http\Livewire\AdminSettingComponent;
use App\Http\Livewire\BlogDetailsComponent;
use App\Http\Livewire\BlogsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\EFMoneyComponent;
use App\Http\Livewire\EFSaccoComponent;
use App\Http\Livewire\EHospitalComponent;
use App\Http\Livewire\EManufacturerComponent;
use App\Http\Livewire\EPBarComponent;
use App\Http\Livewire\EPHardwareComponent;
use App\Http\Livewire\EPHotelComponent;
use App\Http\Livewire\EPPharmacyComponent;
use App\Http\Livewire\EPropertyComponent;
use App\Http\Livewire\EPSchoolComponent;
use App\Http\Livewire\EPShopComponent;
use App\Http\Livewire\ESSchoolComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ProductsComponent;
use App\Http\Livewire\ProjectDetailsComponents;
use App\Http\Livewire\ProjectsComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\ServicesComponent;
use App\Http\Livewire\ThankyouComponent;
use Illuminate\Support\Facades\Route;

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
Route::get('/', HomeComponent::class);
Route::get('/about-us', AboutComponent::class)->name('about');
Route::get('/contact-us', ContactComponent::class)->name('contact');
Route::get('/services', ServicesComponent::class)->name('services');
Route::get('/projects', ProjectsComponent::class)->name('projects');
Route::get('/projects-{slug}', ProjectDetailsComponents::class)->name('project.detail');
Route::get('/projects-category-{category_slug}', CategoryComponent::class)->name('project.category');
Route::get('/search', SearchComponent::class)->name('project.search');
Route::get('/blogs', BlogsComponent::class)->name('blogs');
Route::get('/checkout-{slug}', CheckoutComponent::class)->name('checkout');
Route::get('/thank-you', ThankyouComponent::class)->name('thankyou');
Route::get('/blog-details-{slug}', BlogDetailsComponent::class)->name('blog.details');
Route::get('/essential-finance-money-lender', EFMoneyComponent::class)->name('moneyLender');
Route::get('/essential-finance-sacco', EFSaccoComponent::class)->name('sacco');
Route::get('/essential-hospital', EHospitalComponent::class)->name('hospital');
Route::get('/essential-manufacturer', EManufacturerComponent::class)->name('manufacturer');
Route::get('/essential-pos-bar-and-restaurant', EPBarComponent::class)->name('bar');
Route::get('/essential-pos-hardware', EPHardwareComponent::class)->name('hardware');
Route::get('/essential-pos-hotel', EPHotelComponent::class)->name('hotel');
Route::get('/essential-pos-pharmacy', EPPharmacyComponent::class)->name('pharmacy');
Route::get('/essential-pos-supermarket-shop', EPShopComponent::class)->name('shop');
Route::get('/essential-property', EPropertyComponent::class)->name('property');
Route::get('/essential-primary-school', EPSchoolComponent::class)->name('p-school');
Route::get('/essential-secondary-school', ESSchoolComponent::class)->name('s-school');
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

//For Customer
Route::middleware(['auth:sanctum',config('jetstream.auth_session'), 'verified'])->group(function(){
    // Route::get('/user/review/{property_id}', UserReviewComponent::class)->name('user.review');
});

//For Admin
Route::middleware(['auth:sanctum',config('jetstream.auth_session'), 'verified' , 'authadmin'])->group(function(){
    Route::get('/admin-project-edit-{project_slug}', AdminEditProjectsComponent::class)->name('admin.editproject');
    Route::get('/admin-projects-add', AdminAddProjectsComponent::class)->name('admin.addproject');
    Route::get('/admin-projects', AdminProjectsComponent::class)->name('admin.projects');

    Route::get('/admin-categories', AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin-categories-edit-{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('/admin-categories-add', AdminAddCategoryComponent::class)->name('admin.addcategory');

    // Route::get('/admin/orders', AdminOrderComponent::class)->name('admin.orders');
    Route::get('/admin-contact-us', AdminContactComponent::class)->name('admin.contact');
    Route::get('/admin-settings', AdminSettingComponent::class)->name('admin.settings');
    Route::get('/admin-orders', AdminOrderComponent::class)->name('admin.orders');

    Route::get('/admin-blogs', AdminBlogComponent::class)->name('admin.blogs');
    Route::get('/admin-blogs-add', AdminAddBlogComponent::class)->name('admin.addblog');
    Route::get('/admin-blogs-edit-{blog_slug}', AdminEditBlogComponent::class)->name('admin.editblog');

    Route::get('/admin-project-amenities-{project_slug}', AdminAmenitiesComponent::class)->name('admin.amenities');
    Route::get('/project-amenities-add-{project_slug}', AdminAddAmenitiesComponent::class)->name('admin.addamenities');
    Route::get('/project-amenities-edit-{project_slug}', AdminEditAmenitiesComponent::class)->name('admin.editamenities');


    Route::get('/admin-project-details-{project_slug}', AdminProjectDetailsComponent::class)->name('admin.details');
    Route::get('/project-details-add-{project_slug}', AdminAddProjectDetailsComponent::class)->name('admin.adddetails');
    Route::get('/project-details-edit-{project_slug}', AdminEditProjectDetailsComponent::class)->name('admin.editdetails');
});
