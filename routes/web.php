<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MadenFlorist\ColorController;
use App\Http\Controllers\MadenFlorist\CategoryController;
use App\Http\Controllers\MadenFlorist\TypeController;
use App\Http\Controllers\MadenFlorist\TemplateSlotController;
use App\Http\Controllers\MadenFlorist\TimeSlotController;
use App\Http\Controllers\MadenFlorist\DateSlotController;
use App\Http\Controllers\MadenFlorist\ProductFilterController;
use App\Http\Controllers\MadenFlorist\AddonCategoriesController;
use App\Http\Controllers\MadenFlorist\TimeSlotsGapController;
use App\Http\Controllers\MadenFlorist\DiscountCodeController;
use App\Http\Controllers\MadenFlorist\BannerController;
use App\Http\Controllers\MadenFlorist\CollaborationController;
use App\Http\Controllers\MadenFlorist\ProductController;
use App\Http\Controllers\MadenFlorist\AddonProductController;
use App\Http\Controllers\MadenFlorist\WarehouseController;
use App\Http\Controllers\MadenFlorist\OrderController;
use App\Http\Controllers\MadenFlorist\CustomerController;
use App\Http\Controllers\MadenFlorist\AdminUserController;
use App\Http\Controllers\MadenFlorist\AdminRoleController;
use App\Http\Controllers\MadenFlorist\CountryController;
use App\Http\Controllers\MadenFlorist\CurrencyController;
use App\Http\Controllers\MadenFlorist\OccasionController;
use App\Http\Controllers\MadenFlorist\LanguageController;
use App\Http\Controllers\MadenFlorist\ApiErrorController;
use App\Http\Controllers\MadenFlorist\SystemPageController;
use App\Http\Controllers\MadenFlorist\BatlaatProgramController;
use App\Http\Controllers\MadenFlorist\BatlaatInfoController;
use App\Http\Controllers\MadenFlorist\PaymentMethodController;
use App\Http\Controllers\MadenFlorist\DeliveryCostController;
use App\Http\Controllers\MadenFlorist\TemplateEmailController;
use App\Http\Controllers\MadenFlorist\TemplateSmsController;
use App\Http\Controllers\MadenFlorist\WalletAmountController;
use App\Http\Controllers\MadenFlorist\RedeemAmountController;
use App\Http\Controllers\MadenFlorist\AccountDeletionController;
use App\Http\Controllers\MadenFlorist\FaqController;
use App\Http\Controllers\MadenFlorist\TermsAndConditionController;
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

Route::get('/', function () {
    return redirect()->route('dashboard');
    //return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    
    Route::prefix('product-setup')->group(function () {
        Route::resource('categories', CategoryController::class);
        Route::resource('colors', ColorController::class);
        Route::resource('types', TypeController::class);
        Route::resource('template-slots', TemplateSlotController::class);
        Route::resource('time-slots', TimeSlotController::class);
        Route::resource('date-slots', DateSlotController::class);
        Route::resource('product-filters', ProductFilterController::class);
        Route::resource('addon-categories', AddonCategoriesController::class);
        Route::resource('time-slots-gaps', TimeSlotsGapController::class);
    });

    Route::resource('discount-codes', DiscountCodeController::class);
    Route::resource('banners', BannerController::class);
    Route::resource('collaborations', CollaborationController::class);
    Route::resource('products', ProductController::class);
    Route::resource('addon-products', AddonProductController::class);
    Route::resource('warehouses', WarehouseController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('customers', CustomerController::class);

    Route::prefix('admins')->group(function () {
        Route::resource('admin-users', AdminUserController::class);
        Route::resource('admin-roles', AdminRoleController::class);
    });

    Route::prefix('settings')->group(function () {
        Route::resource('countries', CountryController::class);
        Route::resource('currencies', CurrencyController::class);
        Route::resource('occasions', OccasionController::class);
        Route::resource('languages', LanguageController::class);
        Route::resource('api-errors', ApiErrorController::class);
        Route::resource('system-pages', SystemPageController::class);
        Route::resource('batlaat-programs', BatlaatProgramController::class);
        Route::resource('batlaat-info', BatlaatInfoController::class);
        Route::resource('payment-methods', PaymentMethodController::class);
        Route::resource('delivery-costs', DeliveryCostController::class);
        Route::resource('template-emails', TemplateEmailController::class);
        Route::resource('template-sms', TemplateSmsController::class);
        Route::resource('wallet-amounts', WalletAmountController::class);
        Route::resource('redeem-amounts', RedeemAmountController::class);
        Route::resource('account-deletions', AccountDeletionController::class);
        Route::resource('faqs', FaqController::class);
        Route::resource('terms-and-conditions', TermsAndConditionController::class);
    });
    
    Route::get('/dashboard', function () {
        return view('madenflorist.dashboard.index');
    })->name('dashboard');

    //Route::get('/dashboard', 'HomeController@index')->name('dashboard');
});
