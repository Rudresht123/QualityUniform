<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vendor\VendorController;

Route::prefix('vendors')->name('vendor.')->group(function () {
    Route::get('/index', [VendorController::class, 'index'])->name('index');
    Route::get('/create', [VendorController::class, 'create'])->name('create');
    Route::post('/store', [VendorController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [VendorController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [VendorController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [VendorController::class, 'destroy'])->name('destroy');
    Route::get('/show/{id}', [VendorController::class, 'show'])->name('show');
});

?>