<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\Pages\AboutUs;
use App\Http\Livewire\Pages\ContactUs;
use App\Http\Livewire\Pages\Manufacturing\ManufacturerCategory;
use App\Http\Livewire\Pages\ShopProduct;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\Products;
use App\Http\Livewire\Pages\ShopCategory;
use App\Http\Livewire\Pages\Cart;
use App\Http\Livewire\Pages\Buy;
use App\Http\Livewire\Pages\OrderHistory;
use App\Http\Livewire\Pages\Pay;
// SingleProduct
use App\Http\Livewire\Pages\SingleProduct;
// StripeController
use App\Http\Controllers\StripeController;
use App\Http\Controllers\PayPalController;
use App\Http\Livewire\Category;
use App\Http\Livewire\Manufacturer;
use App\Http\Livewire\Manufacturing\Product as ManufacturerProduct;



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
// Route::get('/', Home::class);

// categories
Route::group(['prefix' => 'categories', 'namespace' => 'App\Http\Livewire\Admin\Categories', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/list', Index::class)->name('category');
    Route::get('/create', Create::class)->name('create-category');
    Route::get('/category/{id}', Create::class)->name('category.edit');

});

// Route::group(['prefix' => 'inquiries', 'namespace' => 'App\Http\Livewire\Admin','middleware'=>['auth','admin']], function () {
//     Route::get('/list', Inquiry::class)->name('inquiry');
//     Route::get('/inquiry-view/{id}', Inquiry::class)->name('inquiry.view');

// });

Route::get('/', function () {
    return view('livewire.home');
})->name('home');


Route::get('/contact', ContactUs::class)->name('contact-us');

Route::get('/shop-product', ShopProduct::class)->name('shop-product');
Route::get('/about-us', AboutUs::class)->name('about-us');
Route::get('/blog', App\Http\Livewire\Pages\Blogs\Index::class)->name('blogs.index');
Route::get('/blog/{slug}', [HomeController::class, 'post'])->name('blogs.post');
// Route::get('/blog', Blog::class)->name('blog');
// Route::get('/manufacturer/category/{slug}', ManufacturerCategory::class)->name('manufacturer-catergory-page');
Route::get('/products/{slug_store}',Products::class)->name('products');
// product detail
Route::get('/product/{slug}', SingleProduct::class)->name('product');
// caegories
// Route::get('/shop/{slug}', ShopCategory::class)->name('category');

// cart
Route::get('/cart', Cart::class)->name('cart');
// shopping adress
Route::group(['middleware' => ['auth']], function () {
// Pay
Route::get('/buy', Buy::class)->name('buy');
// routes/web.php

// Route::post('/fetch', 'StripeController@fetchPaymentIntent');
Route::get('pay/{order}', Pay::class)->name('order.pay');
Route::Post('paymentintent', [StripeController::class, 'fetchPaymentIntent'])->name('paymentintent.fetch');
Route::Post('order/success/{order}', [StripeController::class, 'paymentSuccess'])->name('order.success');

Route::get('connect/{token}', [StripeController::class, 'connectStripe'])->name('stripe.connect');

Route::Post('checkout/{order}', [StripeController::class, 'checkout'])->name('stripe.checkout');

Route::Post('order/success/{order}', [StripeController::class, 'paymentSuccess'])->name('order.success');

Route::Get('order/failed/{token}', [StripeController::class, 'paymentFailed'])->name('order.failed');



Route::Post('paymentintent/{order}', [StripeController::class, 'fetchPaymentIntent'])->name('paymentintent.fetch');


// route for processing payment
Route::post('/paypal/{order}', [PayPalController::class, 'payWithpaypal'])->name('paypal');

// route for check status of the payment
Route::get('/status', [PayPalController::class, 'getPaymentStatus'])->name('status');

Route::get('payment-success/{order}', [PayPalController::class, 'paymentSuccess'])->name('success.payment');
// order.histiry
Route::get('order/history', OrderHistory::class)->name('order.history');
Route::get('/buy', Buy::class)->name('buy');

});

// set default lan
Route::get('/set-default-lang/{locale}', function ($locale) {
    if (setDefaultLang($locale)) {
        return redirect()->back();
    }
    return redirect()->back();
})->name('set-default-lang');
// set default currency
Route::get('/set-user-currency/{currencyCode}', function ($currencyCode) {
    if (setUserCurrency($currencyCode)) {
        return redirect()->back();
    }
    return redirect()->back();
})->name('set-user-currency');
Route::get('/category/{slug_store}', Category::class)->name('category');
// manufacturer
Route::get('/manufacturer/{slug}', Manufacturer::class)->name('manufacturer');
Route::get('/manufacturer/category/{slug}', Manufacturer::class)->name('manufacturer-catergory-page');
// Route::get('/manufacturer/product/{slug}', ManufacturerProduct::class)->nam  e('manufacturer.product');

Route::get('/manufacturer/product/{slug}', ManufacturerProduct::class)->name('manufacturer.product');




