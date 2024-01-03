<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\SoluationsController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CouponController;

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

// Route::get('/admin', function () {
//     return view('admin.index');
// });

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [  'localizationRedirect', 'localeViewPath' ]
    ], function(){


    Route::get('/services', [FrontendController::class, 'services'])->name('services');
    Route::get('/{type}/{slug}/{category}', [FrontendController::class, 'services_details'])->name('service.details');


//    Route::get('/login', [AccountController::class, 'login'])->name('login.show');
//    Route::get('/register', [AccountController::class, 'register'])->name('register.show');

    Route::get('/{type}/{slug}/{soluation}/{name}', [FrontendController::class, 'soluation_show'])->name('soluation.show');


    Route::get('/booking', [FrontendController::class, 'confirm_booking'])->name('frontend.booking');
    Route::get('/service-checkout', [FrontendController::class, 'premium'])->name('premium');


    Route::post('/book-consultation', [FrontendController::class, 'book'])->name('book');
    Route::post('/redirect-to-soluation/{id}', [SoluationsController::class, 'aff'])->name('aff');

    Route::get('lang/change', [FrontendController::class, 'change'])->name('changeLang');

    Route::get('/my-account', [AccountController::class, 'index'])->name('account');
    Route::get('/my-courses', [AccountController::class, 'courses'])->name('courses');
    Route::get('/my-bookings', [AccountController::class, 'bookings'])->name('bookings');

    Route::get('/', [FrontendController::class, 'index'])->name('home');
    Route::get('/course', [FrontendController::class, 'course'])->name('course');


    Route::post('/course-purchase', [FrontendController::class, 'purchase'])->name('purchase');
    Route::post('/consultation-payment', [FrontendController::class, 'purchaseConsult'])->name('purchase.consult');
    Route::post('/course-purchase-guest', [FrontendController::class, 'purchase_guest'])->name('purchase.guest');

    Route::get('/status', [FrontendController::class, 'status'])->name('status');
    Route::get('/status-guest', [FrontendController::class, 'status_guest'])->name('status');
    Route::get('/status-feedback', [FrontendController::class, 'feedback'])->name('feedback');

    Route::get('/lessons', [FrontendController::class, 'lessons'])->name('lessons');
// Route::get('/video', [FrontendController::class, 'video'])->name('video');

});

Route::get('/invoice/{order_id}', [FrontendController::class, 'invoice'])->name('invoice.download');


Route::resource('/videos',VideoController::class,[
    'names' => [
        'show' => 'show.me',
        'store' => 'save.video',

    ]]);

    Route::post('/coupon-apply', [CouponController::class, 'CouponApply']);

Route::get('/coupon-calculation', [CouponController::class, 'CouponCalculation']);

Route::get('/coupon-remove', [CouponController::class, 'CouponRemove']);


    Route::post('/view/', [VideoController::class, 'view'])->name('view');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/part/{part}', [VideoController::class, 'showPart'])->name('show.part');

Route::post('/rate/{soluation}',[ReviewsController::class, 'rate'])->name('rate');



Route::post('/comment',[CommentController::class, 'saveComment'])->name('comment');
Route::get('/comment/{id}/edit',[CommentController::class, 'edit'])->name('comment.edit');
Route::patch('/comment/{id}',[CommentController::class, 'update'])->name('comment.update');
Route::get('/comment/{id}',[CommentController::class, 'destroy'])->name('comment.destroy');



Route::prefix('/admin')->group(function () {


    Route::get('/part/create', [AdminController::class, 'createPart'])->name('create.part');
    Route::get('/videos', [AdminController::class, 'videos'])->name('all.videos');
    Route::get('/parts', [AdminController::class, 'allParts'])->name('all.parts');

    Route::get('/visits', [AdminController::class, 'visits'])->name('visits');

    Route::post('/part/create', [AdminController::class, 'storePart'])->name('store.part');




    Route::get('/coupons', [CouponController::class, 'index'])->name('all-coupons');
    Route::get('/reviews', [AdminController::class, 'rev'])->name('reviews.ad');

    Route::patch('/confirm-review/{review}', [AdminController::class, 'confirm_review'])->name('confirm.re');
    Route::patch('/reject-review/{review}', [AdminController::class, 'reject_review'])->name('reject.re');


    Route::get('/add-coupon', [CouponController::class, 'create'])->name('coupon.form');

    Route::post('/coupons/add', [CouponController::class, 'store'])->name('coupons.store');

    Route::get('/coupons/{coupon}', [CouponController::class, 'edit'])->name('coupon.edit');

    Route::patch('/coupons/update/{coupon}', [CouponController::class, 'update'])->name('coupon.update');

    Route::delete('/coupons/delete/{coupon}', [CouponController::class, 'destroy'])->name('coupon.destroy');

    Route::get('/categories', [CategoriesController::class, 'index'])->name('cat.index');
    Route::post('/categories', [CategoriesController::class, 'store'])->name('cat.store');

    Route::get('/categories/add', [CategoriesController::class, 'create'])->name('cat.form');


    Route::get('/soluations', [SoluationsController::class, 'index'])->name('sol.index');
    Route::post('/soluations', [SoluationsController::class, 'store'])->name('sol.store');

    Route::get('/soluations/add', [SoluationsController::class, 'create'])->name('sol.form');


    Route::get('/payments', [AdminController::class, 'payments'])->name('payments');

    Route::get('/home', [AdminController::class, 'index'])->name('admin.home');

    Route::get('/bookings', [AdminController::class, 'bookings'])->name('admin.bookings');


    Route::get('/appointments', [AdminController::class, 'datesIndex'])->name('dates.index');
Route::get('/appointments/create', [AdminController::class, 'createDates'])->name('appointment.create');
Route::post('/appointment/check', [AdminController::class, 'check'])->name('appointment.check');
Route::post('/appointment/store', [AdminController::class, 'storeDates'])->name('appointment.store');
Route::post('/appointment/update', [AdminController::class, 'updateTime'])->name('update');


});



Route::post('/check-times', [AdminController::class, 'checkTimes']);



Route::get('/services/accounting', [FrontendController::class, 'accounting'])->name('accounting');
Route::get('/services/back-of-house', [FrontendController::class, 'back'])->name('back');
Route::get('/services/delivery', [FrontendController::class, 'delivery'])->name('delivery');
Route::get('/services/loyalty', [FrontendController::class, 'loyalty'])->name('loyalty');
Route::get('/services/online-ordering', [FrontendController::class, 'order'])->name('order');
Route::get('/services/terminal-payment', [FrontendController::class, 'payment'])->name('payment');
Route::get('/services/point-of-sale', [FrontendController::class, 'pos'])->name('pos');


Route::get('/services/food-delivery-aggregators', [FrontendController::class, 'food'])->name('food');
Route::get('/services/data-and-analytics', [FrontendController::class, 'data_mana'])->name('data');
Route::get('/services/digital-menu', [FrontendController::class, 'menu'])->name('menu');
Route::get('/services/digital-receipts', [FrontendController::class, 'receipts'])->name('receipts');
Route::get('/services/erp', [FrontendController::class, 'erp'])->name('erp');
Route::get('/services/ordering-platforms-management', [FrontendController::class, 'ordering'])->name('ordering');
Route::get('/services/supplier-aggregators', [FrontendController::class, 'supplier'])->name('supplier');
Route::get('/services/survey', [FrontendController::class, 'survey'])->name('survey');
Route::get('/services/table-reservation', [FrontendController::class, 'table'])->name('table');
Route::get('/services/payroll-and-attendance', [FrontendController::class, 'attendence'])->name('attendence');
Route::get('/services/hr', [FrontendController::class, 'hr'])->name('hr');
Route::get('/services/marketing', [FrontendController::class, 'marketing'])->name('marketing');



Route::get('/language/arabic', [FrontendController::class, 'arabic'])->name('language.arabic');
Route::get('/language/english', [FrontendController::class, 'english'])->name('language.english');
Route::get('/category/search', [FrontendController::class, 'search'])->name('cat.search');
