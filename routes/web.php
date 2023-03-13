<?php

use App\Http\Controllers\Admin\AdminContactMessageController;
use App\Http\Controllers\Admin\AdminHotSpotController;
use App\Http\Controllers\Admin\AdminMessageBoardItemController;
use App\Http\Controllers\Admin\AdminRuleController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotSpotController;
use App\Http\Controllers\MessageBoardItemController;
use App\Http\Controllers\RuleController;
use Illuminate\Support\Facades\Auth;
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



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/bb/welcome-pack', [HomeController::class, 'welcomeBandb'])->name('welcome.bb');
Route::get('/camping/welcome-pack', [HomeController::class, 'welcomeCamping'])->name('welcome.camping');
Route::get('/local-amenities', [HomeController::class, 'localAmenities'])->name('amenities.index');




Route::group(['middleware' => 'role:admin', 'name' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/messages', [AdminMessageBoardItemController::class, 'index'])->name('admin.messages.index');
    // Route::get('/admin/messages/{messageBoardItem}', [AdminMessageBoardItemController::class, 'show'])->name('admin.messages.show');
    Route::post('/messages/{messageBoardItem}/update', [AdminMessageBoardItemController::class, 'update'])->name('admin.messages.update');
    Route::get('/messages/{messageBoardItem}/edit', [AdminMessageBoardItemController::class, 'edit'])->name('admin.messages.edit');
    Route::get('/messages/{messageBoardItem}/destroy', [AdminMessageBoardItemController::class, 'destroy'])->name('admin.messages.delete');

    Route::get('/hotspots', [AdminHotSpotController::class, 'index'])->name('admin.hotspots.index');
    Route::get('/hotspots/{id}/edit', [AdminHotSpotController::class, 'show'])->name('admin.hotspots.show');
    Route::post('/hotspots/update/{id}', [AdminHotSpotController::class, 'update'])->name('admin.hotspots.update');
    Route::get('/hotspots/{hotspot}/delete', [AdminHotSpotController::class, 'destroy'])->name('admin.hotspots.destroy');
    Route::get('/hotspots/{hotspot}/status', [AdminHotSpotController::class, 'status'])->name('admin.hotspots.status');

    Route::get('/rules', [AdminRuleController::class, 'index'])->name('admin.rules.index');
    Route::get('/rules/create', [AdminRuleController::class, 'create'])->name('admin.rules.create');

    Route::get('/rules/{campsiteRule}', [AdminRuleController::class, 'show'])->name('admin.rules.show');
    Route::post('/rules/{campsiteRule}/update', [AdminRuleController::class, 'update'])->name('admin.rules.update');
    Route::post('/rules/store', [AdminRuleController::class, 'store'])->name('admin.rules.store');
    Route::get('/rules/{campsiteRule}/destroy', [AdminRuleController::class, 'destroy'])->name('admin.rules.destroy');

    Route::get('/contact', [AdminContactMessageController::class, 'index'])->name('admin.contact.index');

    Route::get('/contact/{contactMessage}', [AdminContactMessageController::class, 'show'])->name('admin.contact.show');
    Route::post('/contact/{contactMessage}/delete', [AdminContactMessageController::class, 'destroy'])->name('admin.contact.destroy');
})->name('admin');

Route::controller(HotSpotController::class)->group(function () {
    Route::get('/hotspots', 'index')->name('hotspot.index');
    Route::get('/hotspots/create', 'create')->name('hotspot.create');
    Route::get('/hotspot/{id}', 'show')->name('hotspot.show');
    Route::post('/hotspots/store', 'store')->name('hotspot.store');
});

Route::controller(MessageBoardItemController::class)->group(function () {
    Route::get('/messages', 'index')->name('message.index');
    Route::get('/messages/create', 'create')->name('message.create');
    Route::get('/messages/{id}', 'show')->name('message.show');
    Route::post('/messages/store', 'store')->name('message.store');
    Route::get('/messages/{id}/like', 'like')->name('message.like');
});


Route::get('/rules', [RuleController::class, 'index'])->name('rules.index');


// Route::get('/contact', [ContactMessageController::class, 'index'])->name('contact.index');
// Route::post('/contact/send', [ContactMessageController::class, 'store'])->name('contact.store');


require __DIR__ . '/auth.php';
