<?php

use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Employee\ViewPrescriptionComponent;
use App\Http\Livewire\SearchComponent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',\App\Http\Livewire\HomeComponent::class);
Route::get('/Shop',\App\Http\Livewire\ShopComponent::class);
Route::get('/Cart',\App\Http\Livewire\CartComponent::class)->name('product.cart');
Route::get('/Checkout',\App\Http\Livewire\CheckoutComponent::class);
Route::get('/product/{slug}',\App\Http\Livewire\DetailsComponent::class)->name('product.details');
Route::get('/product-category/{category_slug}/{scategory_slug?}',\App\Http\Livewire\CategoryComponent::class)->name('product.category');
Route::get('/search',SearchComponent::class)->name('product.search');

Route::get('/PrescripUpload',\App\Http\Livewire\PrescriptionComponent::class);

//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified'
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//});


//For default customer or user
Route::middleware(['auth:sanctum','verified','authusr'])->group(function(){
    Route::get('/user/Dashboard',\App\Http\Livewire\User\UserDashboardComponent::class)->name('user.dashboard');
});

//For admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('/admin/Dashboard',\App\Http\Livewire\Admin\AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories',\App\Http\Livewire\Admin\AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',\App\Http\Livewire\Admin\AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/category/edit/{category_slug}/{scategory_slug?}',\App\Http\Livewire\Admin\AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('/admin/products',\App\Http\Livewire\Admin\AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add',\App\Http\Livewire\Admin\AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('/admin/product/edit/{product_slug}',\App\Http\Livewire\Admin\AdminEditProductComponent::class)->name('admin.editproduct');

    Route::get('/admin/slider',\App\Http\Livewire\Admin\AdminHomeSliderComponent::class)->name('admin.homeslider');
    Route::get('/admin/slider/add',\App\Http\Livewire\Admin\AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');
    Route::get('/admin/slider/edit/{slide_id}',\App\Http\Livewire\Admin\AdminEditHomeSliderComponent::class)->name('admin.edithomeslider');
    Route::get('/admin/orders',\App\Http\Livewire\Admin\AdminOrderComponent::class)->name('admin.orders');
    Route::get('/admin/orders/{order_id}',\App\Http\Livewire\Admin\AdminOrderDetailsComponent::class)->name('admin.orderdetails');
});

//For Employee
Route::middleware(['auth:sanctum','verified','authemp'])->group(function(){
    Route::get('/employee/Dashboard',\App\Http\Livewire\employee\EmpDashboardComponent::class)->name('employee.dashboard');
});

//For Doctor
Route::middleware(['auth:sanctum','verified','authdoc'])->group(function(){
    Route::get('/doctor/Dashboard',\App\Http\Livewire\Doctor\DocDashboardComponent::class)->name('doctor.dashboard');
});

//For Dealer
Route::middleware(['auth:sanctum','verified','authdeal'])->group(function(){
    Route::get('/dealer/Dashboard',\App\Http\Livewire\Dealer\DealerDashboardComponent::class)->name('dealer.dashboard');
});
