<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdmin\VendorController;

Route::prefix('vendors')->name('vendor.')->group(function () {
    Route::get('/index', [VendorController::class, 'index'])->name('index');
    Route::get('/create', [VendorController::class, 'create'])->name('create');
    Route::post('/store', [VendorController::class, 'store'])->name('store');
    Route::get('/edit/{vendor}', [VendorController::class, 'edit'])->name('edit');
    Route::put('/update/{vendor}', [VendorController::class, 'update'])->name('update');
    Route::delete('/delete/{vendor}', [VendorController::class, 'destroy'])->name('destroy');
    Route::get('/show/{vendor}', [VendorController::class, 'show'])->name('show');
});

?>