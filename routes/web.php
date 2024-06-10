<?php
//User Side Routes
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExpertsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppsController;

//Admin Panel Routes
use App\Http\Controllers\Banner\BannerController;
use App\Http\Controllers\Aboutus\AboutusController;
use App\Http\Controllers\Expert\Expertcontroller;
use App\Http\Controllers\Testimonial\Testimonialcontroller;
use App\Http\Controllers\Setting\Settingcontroller;
use App\Http\Controllers\Pro\Procontroller;
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
// routes/web.php

Route::get('/', function () {
    return view('welcome');
});

//Admin Routes
Route::get('/admin/login',[AdminLoginController::class,'index'])->name('admin.login');
Route::group(['prefix'=>'admin'],function(){
    Route::group(['middleware'=>'admin.guest'],function(){
        Route::get('/login',[AdminLoginController::class,'index'])->name('admin.login');
        Route::post('/authenticate',[AdminLoginController::class,'authenticate'])->name('admin.authenticate');
});
Route::group(['middleware'=>'admin.auth'],function(){
    Route::get('/dashboard',[HomeController::class,'index'])->name('admin.dashboard');
    Route::get('/profile/edit', [HomeController::class, 'editProfile'])->name('admin.profile.edit');
    Route::put('/profile/update', [HomeController::class, 'updateProfile'])->name('admin.profile.update');
    Route::get('/logout',[HomeController::class,'logout'])->name('admin.logout');
});
});

//banner Routes
Route::get('admin/login/dashboard/banners', [bannerController::class, 'index']);
Route::get('admin/login/dashboard/banners', [bannerController::class, 'index'])->name('banner.index');
Route::post('admin/login/dashboard/banners', [bannerController::class, 'store'])->name('banner.store');
Route::get('admin/login/dashboard/banners/view', [bannerController::class, 'view'])->name('banner.view');
Route::get('admin/login/dashboard/banners/edit/{id}', [bannerController::class, 'edit'])->name('banner.edit');
Route::put('admin/login/dashboard/banners/update/{id}', [bannerController::class, 'update'])->name('banner.update');
Route::delete('admin/login/dashboard/banners/delete/{id}', [bannerController::class, 'delete'])->name('banner.delete');
Route::post('/banners/toggle-status/{id}', [bannerController::class, 'toggleStatus'])->name('banner.toggleStatus');

//pro Routes
Route::get('admin/login/dashboard/pros', [proController::class, 'index']);
Route::get('admin/login/dashboard/pros', [proController::class, 'index'])->name('pro.index');
Route::post('admin/login/dashboard/pros', [proController::class, 'store'])->name('pro.store');
Route::get('admin/login/dashboard/pros/view', [proController::class, 'view'])->name('pro.view');
Route::get('admin/login/dashboard/pros/edit/{id}', [proController::class, 'edit'])->name('pro.edit');
Route::put('admin/login/dashboard/pros/update/{id}', [proController::class, 'update'])->name('pro.update');
Route::delete('admin/login/dashboard/pros/delete/{id}', [proController::class, 'delete'])->name('pro.delete');
Route::post('/pros/toggle-status/{id}', [proController::class, 'toggleStatus'])->name('pro.toggleStatus');

//aboutus Routes
Route::get('admin/login/dashboard/aboutus', [aboutusController::class, 'index']);
Route::get('admin/login/dashboard/aboutus', [aboutusController::class, 'index'])->name('aboutus.index');
Route::post('admin/login/dashboard/aboutus', [aboutusController::class, 'store'])->name('aboutus.store');
Route::get('admin/login/dashboard/aboutus/view', [aboutusController::class, 'view'])->name('aboutus.view');
Route::get('admin/login/dashboard/aboutus/edit/{id}', [aboutusController::class, 'edit'])->name('aboutus.edit');
Route::put('admin/login/dashboard/aboutus/update/{id}', [aboutusController::class, 'update'])->name('aboutus.update');
Route::delete('admin/login/dashboard/aboutus/delete/{id}', [aboutusController::class, 'delete'])->name('aboutus.delete');
Route::post('/aboutus/toggle-status/{id}', [aboutusController::class, 'toggleStatus'])->name('aboutus.toggleStatus');

//expert Routes
Route::get('admin/login/dashboard/expert', [expertController::class, 'index']);
Route::get('admin/login/dashboard/expert', [expertController::class, 'index'])->name('expert.index');
Route::post('admin/login/dashboard/expert', [expertController::class, 'store'])->name('expert.store');
Route::get('admin/login/dashboard/expert/view', [expertController::class, 'view'])->name('expert.view');
Route::get('admin/login/dashboard/expert/edit/{id}', [expertController::class, 'edit'])->name('expert.edit');
Route::put('admin/login/dashboard/expert/update/{id}', [expertController::class, 'update'])->name('expert.update');
Route::delete('admin/login/dashboard/expert/delete/{id}', [expertController::class, 'delete'])->name('expert.delete');
Route::post('/expert/toggle-status/{id}', [expertController::class, 'toggleStatus'])->name('expert.toggleStatus');

//testimonial Routes
Route::get('admin/login/dashboard/testimonial', [testimonialController::class, 'index']);
Route::get('admin/login/dashboard/testimonial', [testimonialController::class, 'index'])->name('testimonial.index');
Route::post('admin/login/dashboard/testimonial', [testimonialController::class, 'store'])->name('testimonial.store');
Route::get('admin/login/dashboard/testimonial/view', [testimonialController::class, 'view'])->name('testimonial.view');
Route::get('admin/login/dashboard/testimonial/edit/{id}', [testimonialController::class, 'edit'])->name('testimonial.edit');
Route::put('admin/login/dashboard/testimonial/update/{id}', [testimonialController::class, 'update'])->name('testimonial.update');
Route::delete('admin/login/dashboard/testimonial/delete/{id}', [testimonialController::class, 'delete'])->name('testimonial.delete');
Route::post('/testimonial/toggle-status/{id}', [testimonialController::class, 'toggleStatus'])->name('testimonial.toggleStatus');

//setting Routes
Route::get('admin/login/dashboard/setting', [settingController::class, 'index']);
Route::get('admin/login/dashboard/setting', [settingController::class, 'index'])->name('setting.index');
Route::post('admin/login/dashboard/setting', [settingController::class, 'store'])->name('setting.store');
Route::get('admin/login/dashboard/setting/view', [settingController::class, 'view'])->name('setting.view');
Route::get('admin/login/dashboard/setting/edit/{id}', [settingController::class, 'edit'])->name('setting.edit');
Route::put('admin/login/dashboard/setting/update/{id}', [settingController::class, 'update'])->name('setting.update');
Route::delete('admin/login/dashboard/setting/delete/{id}', [settingController::class, 'delete'])->name('setting.delete');
Route::post('/setting/toggle-status/{id}', [settingController::class, 'toggleStatus'])->name('setting.toggleStatus');



//user side

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::post('/dashboard', [DashboardController::class, 'store'])->name('dashboard.index');



//cart route
//Route::get('/dashboard/cart', [CartController::class, 'index'])->name('cart.index');
/*Route::post('/dashboard/cart', [CartController::class, 'store'])->name('cart.addtocart');
Route::delete('dashboard/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::get('/dashboard/cart/view', [cartController::class, 'view'])->name('cart.view');
Route::get('/dashboard/cart/edit/{id}', [cartController::class, 'edit'])->name('cart.edit');
Route::put('/dashboard/cart/update/{id}', [cartController::class, 'update'])->name('cart.update');
Route::delete('/dashboard/cart/delete/{id}', [cartController::class, 'delete'])->name('cart.delete');
Route::post('/dashboard/cart/toggle-status/{id}', [cartController::class, 'toggleStatus'])->name('cart.toggleStatus');*/

//login
Route::get('/dashboard/cart/login', [CustomAuthController::class, 'dashboard']); 
Route::get('/dashboard/cart/login', [CustomAuthController::class, 'index'])->name('login');
Route::get('/dashboard/cart/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::post('/dashboard/cart/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('/dashboard/cart/registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('/dashboard/cart/custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('/dashboard/signout', [CustomAuthController::class, 'signOut'])->name('signout');

//Shopping Route
Route::get('/dashboard/shopping', [shoppingController::class, 'index']);
Route::get('/dashboard/shopping', [shoppingController::class, 'index'])->name('shopping.index');
Route::post('/dashboard/shopping', [shoppingController::class, 'store'])->name('shopping.store');
Route::get('/dashboard/shopping/view', [shoppingController::class, 'view'])->name('shopping.view');
Route::get('/dashboard/shopping/edit/{id}', [shoppingController::class, 'edit'])->name('shopping.edit');
Route::put('/dashboard/shopping/update/{id}', [shoppingController::class, 'update'])->name('shopping.update');
Route::delete('/dashboard/shopping/delete/{id}', [shoppingController::class, 'delete'])->name('shopping.delete');
Route::post('/dashboard/shopping/toggle-status/{id}', [shoppingController::class, 'toggleStatus'])->name('shopping.toggleStatus');

//single Route
Route::get('/dashboard/single', [singleController::class, 'index']);
Route::get('/dashboard/single', [singleController::class, 'index'])->name('single.index');
Route::post('/dashboard/single', [singleController::class, 'store'])->name('single.store');
Route::get('/dashboard/single/view', [singleController::class, 'view'])->name('single.view');
Route::get('/dashboard/single/edit/{id}', [singleController::class, 'edit'])->name('single.edit');
Route::put('/dashboard/single/update/{id}', [singleController::class, 'update'])->name('single.update');
Route::delete('/dashboard/single/delete/{id}', [singleController::class, 'delete'])->name('single.delete');
Route::post('/dashboard/single/toggle-status/{id}', [singleController::class, 'toggleStatus'])->name('single.toggleStatus');

//about Route
Route::get('/dashboard/about', [aboutController::class, 'index']);
Route::get('/dashboard/about', [aboutController::class, 'index'])->name('about.index');

//contact Route
Route::get('/dashboard/contact', [contactController::class, 'index']);
Route::get('/dashboard/contact', [contactController::class, 'index'])->name('contact.index');
Route::post('/dashboard/contact', [contactController::class, 'store'])->name('contact.store');
Route::get('/dashboard/contact/view', [contactController::class, 'view'])->name('contact.view');
Route::get('/dashboard/contact/edit/{id}', [contactController::class, 'edit'])->name('contact.edit');
Route::put('/dashboard/contact/update/{id}', [contactController::class, 'update'])->name('contact.update');
Route::delete('/dashboard/contact/delete/{id}', [contactController::class, 'delete'])->name('contact.delete');
Route::post('/dashboard/contact/toggle-status/{id}', [contactController::class, 'toggleStatus'])->name('contact.toggleStatus');

//account Route
Route::get('/dashboard/account', [accountController::class, 'index']);
Route::get('/dashboard/account', [accountController::class, 'index'])->name('account.index');
Route::post('/dashboard/account', [accountController::class, 'store'])->name('account.store');
Route::get('/dashboard/account/view', [accountController::class, 'view'])->name('account.view');
Route::get('/dashboard/account/edit/{id}', [accountController::class, 'edit'])->name('account.edit');
Route::put('/dashboard/account/update/{id}', [accountController::class, 'update'])->name('account.update');
Route::delete('/dashboard/account/delete/{id}', [accountController::class, 'delete'])->name('account.delete');
Route::post('/dashboard/account/toggle-status/{id}', [accountController::class, 'toggleStatus'])->name('account.toggleStatus');

//wishlist Route
Route::get('/dashboard/wishlist', [wishlistController::class, 'index']);
Route::get('/dashboard/wishlist', [wishlistController::class, 'index'])->name('wishlist.index');
Route::post('/dashboard/wishlist', [wishlistController::class, 'store'])->name('wishlist.store');
Route::get('/dashboard/wishlist/view', [wishlistController::class, 'view'])->name('wishlist.view');
Route::get('/dashboard/wishlist/edit/{id}', [wishlistController::class, 'edit'])->name('wishlist.edit');
Route::put('/dashboard/wishlist/update/{id}', [wishlistController::class, 'update'])->name('wishlist.update');
Route::delete('/dashboard/wishlist/delete/{id}', [wishlistController::class, 'delete'])->name('wishlist.delete');
Route::post('/dashboard/wishlist/toggle-status/{id}', [wishlistController::class, 'toggleStatus'])->name('wishlist.toggleStatus');

//Checkout Route
Route::get('/dashboard/checkout', [checkoutController::class, 'index']);
Route::get('/dashboard/checkout', [checkoutController::class, 'index'])->name('checkout.index');
Route::post('/dashboard/checkout', [checkoutController::class, 'store'])->name('checkout.store');
Route::get('/dashboard/checkout/view', [checkoutController::class, 'view'])->name('checkout.view');
Route::get('/dashboard/checkout/edit/{id}', [checkoutController::class, 'edit'])->name('checkout.edit');
Route::put('/dashboard/checkout/update/{id}', [checkoutController::class, 'update'])->name('checkout.update');
Route::delete('/dashboard/checkout/delete/{id}', [checkoutController::class, 'delete'])->name('checkout.delete');
Route::post('/dashboard/checkout/toggle-status/{id}', [checkoutController::class, 'toggleStatus'])->name('checkout.toggleStatus');

//product Route
//Route::get('/dashboard/product', [productController::class, 'index']);
//Route::get('/dashboard/product', [productController::class, 'index'])->name('product.index');
//Route::get('/dashboard/product', [productController::class, 'tractor'])->name('product.tractor');


Route::get('/dashboard/product', [ProductController::class, 'index'])->name('products');
Route::get('/dashboard/cart',[ProductController::class, 'cart'])->name('cart');
Route::get('/dashboard/cart/add-to-cart/{product}',[ProductController::class, 'addToCart'])->name('add-cart');
Route::get('/dashboard/cart/remove/{id}',[ProductController::class, 'removeFromCart'])->name('remove');
Route::get('/dashboard/cart/change-qty/{product}', [ProductController::class, 'changeQty'])->name('change_qty');