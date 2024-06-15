<?php

use Illuminate\Support\Facades\Route;

#### For Auth
use App\Http\Controllers\Auth\{
	LoginController,
	RegisterController,
	ForgotPasswordController,
};

### For Admin
use App\Http\Controllers\Admin\{
	DashboardController,
	ProfileController,
	CMSController,
	EditorController,
	StoreController,
};

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

#Route::get('/', [LoginController::class, 'showLoginForm']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/store-locator', [App\Http\Controllers\HomeController::class, 'storeLocator'])->name('store-locator');
Route::post('/storeSearch', [App\Http\Controllers\HomeController::class, 'getStoreList']);

Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('contact-us');
Route::get('/nectr-beverages', [App\Http\Controllers\HomeController::class, 'nectrBeverages'])->name('nectr-beverages');
Route::get('/sugerloaf-springs', [App\Http\Controllers\HomeController::class, 'sugerloafSprings'])->name('sugerloaf-springs');
Route::get('/{frompage?}/login', [LoginController::class, 'showLoginForm'])->name('user.login');
Route::post('/send/email', [App\Http\Controllers\HomeController::class, 'sendEmail'])->name('send.emails');

Route::middleware(['auth'])->group(function () {
	Route::prefix('admin')->group(function() {
		Route::get('/', [DashboardController::class, 'index'])->name('home');

		### Admin Profile
		Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile');
		Route::PUT('/profile/{user}', [ProfileController::class, 'updateProfile'])->name('admin.updateprofile');

		### Static Pages
		Route::prefix('cms')->group(function() {
			Route::get('/', [CMSController::class, 'index'])->name('cms.list');
			Route::post('/create', [CMSController::class, 'create'])->name('cms.create');
			Route::post('/data',  [CMSController::class, 'data'])->name('cms.data');
			Route::delete('/{cms}',  [CMSController::class, 'destroy'])->name('cms.delete');
		});
	
		### Editor Pages
		Route::get('/editor', [EditorController::class, 'index'])->name('public.editor.view');
		Route::post('/editor/{page}', [EditorController::class, 'storePage'])->name('public.editor.store');

		### Stores
		Route::prefix('stores')->group(function() {
			Route::get('/', [StoreController::class, 'index'])->name('store.list');
			Route::get('/create', [StoreController::class, 'create'])->name('store.create');
			Route::post('/store', [StoreController::class, 'store'])->name('store.store');
			Route::post('/data',  [StoreController::class, 'data'])->name('store.data');
			Route::get('/edit/{store}', [StoreController::class, 'edit'])->name('store.edit');
			Route::put('/{store}',  [StoreController::class, 'update'])->name('store.update');
			Route::delete('/{store}',  [StoreController::class, 'destroy'])->name('store.delete');
		});
	});

	Route::get('/scanimages', [EditorController::class, 'scanImages'])->name('public.editor.scanimages');
	Route::post('/uploadimage', [EditorController::class, 'uploadImage'])->name('public.editor.uploadimage');
});

Auth::routes();
