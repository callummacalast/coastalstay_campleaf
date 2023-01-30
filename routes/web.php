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



Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/welcome-pack', [HomeController::class, 'welcomePack'])->name('welcome.pack');



Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin/messages', [AdminMessageBoardItemController::class, 'index'])->name('admin.messages.index');
    // Route::get('/admin/messages/{messageBoardItem}', [AdminMessageBoardItemController::class, 'show'])->name('admin.messages.show');
    Route::post('/admin/messages/{messageBoardItem}/update', [AdminMessageBoardItemController::class, 'update'])->name('admin.messages.update');
    Route::get('/admin/messages/{messageBoardItem}/edit', [AdminMessageBoardItemController::class, 'edit'])->name('admin.messages.edit');
    Route::get('/admin/messages/{messageBoardItem}/destroy', [AdminMessageBoardItemController::class, 'destroy'])->name('admin.messages.delete');

    Route::get('/admin/hotspots', [AdminHotSpotController::class, 'index'])->name('admin.hotspots.index');
    Route::get('/admin/hotspots/{id}/edit', [AdminHotSpotController::class, 'show'])->name('admin.hotspots.show');
    Route::post('/admin/hotspots/update/{id}', [AdminHotSpotController::class, 'update'])->name('admin.hotspots.update');

    Route::get('/admin/rules', [AdminRuleController::class, 'index'])->name('admin.rules.index');
    Route::post('/admin/rules/create', [AdminRuleController::class, 'create'])->name('admin.rules.create');

    Route::get('/admin/rules/{campsiteRule}', [AdminRuleController::class, 'show'])->name('admin.rules.show');
    Route::post('/admin/rules/{campsiteRule}/update', [AdminRuleController::class, 'update'])->name('admin.rules.update');
    Route::post('/admin/rules/store', [AdminRuleController::class, 'store'])->name('admin.rules.store');
    Route::get('/admin/rules/{campsiteRule}/destroy', [AdminRuleController::class, 'destroy'])->name('admin.rules.destroy');

    Route::get('/admin/contact', [AdminContactMessageController::class, 'index'])->name('admin.contact.index');

    Route::get('/admin/contact/{contactMessage}', [AdminContactMessageController::class, 'show'])->name('admin.contact.show');
    Route::post('/admin/contact/{contactMessage}/delete', [AdminContactMessageController::class, 'destroy'])->name('admin.contact.destroy');
});





Route::get('/hotspots', [HotSpotController::class, 'index'])->name('hotspot.index');
Route::get('/hotspots/create', [HotSpotController::class, 'create'])->name('hotspot.create');
Route::get('/hotspot/{id}', [HotSpotController::class, 'show'])->name('hotspot.show');
Route::post('/hotspots/store', [HotSpotController::class, 'store'])->name('hotspot.store');



Route::get('/messages', [MessageBoardItemController::class, 'index'])->name('message.index');
Route::get('/messages/create', [MessageBoardItemController::class, 'create'])->name('message.create');
Route::get('/messages/{id}', [MessageBoardItemController::class, 'show'])->name('message.show');
Route::post('/messages/store', [MessageBoardItemController::class, 'store'])->name('message.store');
Route::get('/messages/{id}/like', [MessageBoardItemController::class, 'like'])->name('message.like');

Route::get('/rules', [RuleController::class, 'index'])->name('rules.index');


Route::get('/contact', [ContactMessageController::class, 'index'])->name('contact.index');
Route::post('/contact/send', [ContactMessageController::class, 'store'])->name('contact.store');


require __DIR__ . '/auth.php';
