<?php

use App\Http\Controllers\Admin\ManufacturerController;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Livewire\Admin\Categories\ManageCategories;
use App\Http\Livewire\Admin\PromotedProducts\PromotedProducts;
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

// Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
// });

Route::get('/', function() {
    return redirect()->route('admin.dashboard');
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('categories/', ManageCategories::class)->name('categories');

    Route::group(['prefix' => 'inquiries', 'namespace' => 'App\Http\Livewire\Admin'], function () {
        Route::get('/list', Inquiry::class)->name('inquiry');
        Route::get('/inquiry-view/{id}', Inquiry::class)->name('inquiry.view');
    });

    Route::group(['prefix' => 'zones', 'namespace' => 'App\Http\Livewire\Admin\Zones'], function () {
        Route::get('/list', Index::class)->name('zone');

    });

    // promotions
    Route::group(['prefix' => 'promotions', 'namespace' => 'App\Http\Livewire\Admin\Promotions'], function () {
        Route::get('/list', Index::class)->name('promotion');
        Route::get('/create', Create::class)->name('create-promotion');
        Route::get('/promotion/{id}', Create::class)->name('edit-promotion');

    });

    // email config
    Route::group(['prefix' => 'email-config', 'namespace' => 'App\Http\Livewire\Admin\EmailConfig'], function () {
        Route::get('/list', Index::class)->name('email-config');
        // Route::get('/create', Create::class)->name('create-email-config');
        // Route::get('/email-config/{id}', Create::class)->name('email-config.edit');
    });

    // SIZE
    Route::group(['prefix' => 'sizes', 'namespace' => 'App\Http\Livewire\Admin\Sizes'], function () {
        Route::get('/list', Index::class)->name('size');
        Route::get('/create', Create::class)->name('create-size');
        Route::get('/size/{id}', Create::class)->name('size.edit');
    });

    // Variants
    Route::group(['prefix' => 'variants', 'namespace' => 'App\Http\Livewire\Admin\Variant'], function () {
        Route::get('/list', Index::class)->name('variant');
        Route::get('/create', Create::class)->name('create-variant');
        Route::get('/variant/{id}', Create::class)->name('variant.edit');

        Route::get('/variant-list/{id}', VariantOptions::class)->name('variantOption');
        Route::get('/variant-options', VariantOptions::class)->name('create-variantOption');
        Route::get('/variant-options/{id}', VariantOptions::class)->name('variantOption.edit');

    });

    Route::group(['prefix' => 'settings', 'namespace' => 'App\Http\Livewire\Admin\Manage'], function () {
        Route::get('/', Settings::class)->name('settings');
    });
    // Promoted products
    Route::group(['prefix' => 'promoted-products', 'namespace' => 'App\Http\Livewire\Admin\PromotedProducts'], function () {
        Route::get('/list', PromotedProducts::class)->name('promoted-products');
    });

    // Manufacturer Products
    Route::group(['prefix' => 'manufacturer', 'namespace' => 'App\Http\Livewire\Admin\Manufacturer'], function () {
        // Route::get('/list', Index::class)->name('product');
        Route::get('/list', Index::class)->name('manufacturer-products-list');
        Route::get('/create', Create::class)->name('manufacturer-product-create');
        Route::post('/store', [ManufacturerController::class, "store"])->name("manufacturer-store");
        Route::get('/edit/{id}', Update::class)->name("manufacturer-edit");
        Route::post('/update', [ManufacturerController::class, "update"])->name("manufacturer-update");

    });

    // email config
    Route::group(['prefix' => 'email-config', 'namespace' => 'App\Http\Livewire\Admin\EmailConfig'], function () {
        Route::get('/list', Index::class)->name('email-config');
    });

    // SIZE
    Route::group(['prefix' => 'sizes', 'namespace' => 'App\Http\Livewire\Admin\Sizes'], function () {
        Route::get('/list', Index::class)->name('size');
        Route::get('/create', Create::class)->name('create-size');
        Route::get('/size/{id}', Create::class)->name('size.edit');
    });

    // Variants
    Route::group(['prefix' => 'variants', 'namespace' => 'App\Http\Livewire\Admin\Variant'], function () {
        Route::get('/list', Index::class)->name('variant');
        Route::get('/create', Create::class)->name('create-variant');
        Route::get('/variant/{id}', Create::class)->name('variant.edit');

        Route::get('/variant-list/{id}', VariantOptions::class)->name('variantOption');
        Route::get('/variant-options', VariantOptions::class)->name('create-variantOption');
        Route::get('/variant-options/{id}', VariantOptions::class)->name('variantOption.edit');
    });
    // Products
    Route::group(['prefix' => 'products', 'namespace' => 'App\Http\Livewire\Admin\Products'], function () {
        Route::get('/list', Index::class)->name('product');
        Route::get('/create', Create::class)->name('create-product');
        Route::get('/{slug}', Create::class)->name('product.edit');
        Route::get('/reviews/{product}', Reviews::class)->name('product.reviews');
        Route::get('/comments/{product}', Comments::class)->name('product.comments');
    });
    // orders
    Route::group(['prefix' => 'orders', 'namespace' => 'App\Http\Livewire\Admin\Orders'], function () {
        Route::get('/list', Index::class)->name('order');
        // Route::get('/create', Create::class)->name('create-orders');
        // Route::get('/product/{id}', Create::class)->name('product.edit');
    });

    // Blogs
    Route::group(['prefix' => 'blogs', 'namespace' => 'App\Http\Livewire\Admin\Blogs'], function () {
        Route::get('/list', Index::class)->name('list-blogs');
        Route::get('/create', Create::class)->name('create-blog');
        Route::post('/store', [BlogsController::class, 'store'])->name('blog-store');
        Route::get('/edit/{slug}', Edit::class)->name('blog-edit');
        Route::post('/update', [BlogsController::class, 'update'])->name('blog-update');
    });

    Route::group(['prefix' => 'shipping-methods', 'as' => 'shipping-methods.', 'namespace' => 'App\Http\Livewire\Admin\ShippingMethods'], function () {
        Route::get('/create', Create::class)->name('create');
    });
});
