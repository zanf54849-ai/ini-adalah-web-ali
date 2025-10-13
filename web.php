<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\{
    ShopController, SingleController, ContactController, OrderController, CheckoutController
};
use Stichoza\GoogleTranslate\GoogleTranslate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Sudah diperbaiki supaya:
| ✅ Pencarian tetap di halaman masing-masing (shop, shop2, shop3)
| ✅ Tidak ada duplikasi route
| ✅ Pesan hasil pencarian tampil sesuai kondisi
|--------------------------------------------------------------------------
*/

// ✅ Halaman utama (home)
Route::get('/', function (Request $request) {
    $search = $request->input('q');
    $category = $request->input('category');
    $products = collect();

    if ($search || ($category && $category !== 'All Category')) {
        $products = DB::table('products')
            ->when($search, fn($q) => $q->where('name', 'like', "%{$search}%"))
            ->when($category && $category !== 'All Category', fn($q) => $q->where('category', $category))
            ->get();
    }

    return view('index', compact('products', 'search', 'category'));
})->name('index');


// ✅ SHOP 1
Route::get('/shop', function (Request $request) {
    $search = $request->input('q');
    $category = $request->input('category');
    $products = collect();

    if ($search || ($category && $category !== 'All Category')) {
        $products = DB::table('products')
            ->when($search, fn($q) => $q->where('name', 'like', "%{$search}%"))
            ->when($category && $category !== 'All Category', fn($q) => $q->where('category', $category))
            ->get();
    }

    return view('shop', compact('products', 'search', 'category'));
})->name('shop');


// ✅ SHOP 2
Route::get('/shop2', function (Request $request) {
    $search = $request->input('q');
    $category = $request->input('category');
    $products = collect();

    if ($search || ($category && $category !== 'All Category')) {
        $products = DB::table('products')
            ->when($search, fn($q) => $q->where('name', 'like', "%{$search}%"))
            ->when($category && $category !== 'All Category', fn($q) => $q->where('category', $category))
            ->get();
    }

    return view('shop2', compact('products', 'search', 'category'));
})->name('shop2');


// ✅ SHOP 3
Route::get('/shop3', function (Request $request) {
    $search = $request->input('q');
    $category = $request->input('category');
    $products = collect();

    if ($search || ($category && $category !== 'All Category')) {
        $products = DB::table('products')
            ->when($search, fn($q) => $q->where('name', 'like', "%{$search}%"))
            ->when($category && $category !== 'All Category', fn($q) => $q->where('category', $category))
            ->get();
    }

    return view('shop3', compact('products', 'search', 'category'));
})->name('shop3');


// ✅ Halaman Single Produk
Route::get('/single', [SingleController::class, 'index'])->name('single');

// ✅ Halaman Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// ✅ Halaman Form Order
Route::get('/order/form', fn() => view('order-form'))->name('order.form');

// ✅ Simpan Order
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');

// ✅ Checkout
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');

// ✅ Ganti Bahasa
Route::get('/lang/{lang}', function ($lang) {
    session(['locale' => $lang]);
    app()->setLocale($lang);
    return redirect()->back();
})->name('lang.switch');

// ✅ Auto Translate (Google Translate Helper)
Route::get('/auto-translate', function () {
    $tr = new GoogleTranslate('en'); // target bahasa
    $tr->setSource('id'); // sumber bahasa

    $source = include resource_path('lang/id/messages.php');
    $translated = [];

    foreach ($source as $key => $text) {
        $translated[$key] = $tr->translate($text);
    }

    $export = "<?php\n\nreturn " . var_export($translated, true) . ";\n";
    file_put_contents(resource_path('lang/en/messages.php'), $export);

    return 'Translasi selesai ✅ lihat di lang/en/messages.php';
});
