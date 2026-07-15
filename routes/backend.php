<?php

use App\Http\Controllers\Backend\{
    AboutController,
    AuthController,
    CompanyCategoryController,
    CompanyController,
    CounterController,
    DashboardController,
    HistoryController,
    LanguageController,
    NewsArticleController,
    PartnerController,
    ProductCategoryController,
    ProductController,
    ProfileController,
    SettingController,
    SliderController,
    TranslationController,
    UserController,
};

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::delete('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('', DashboardController::class)->name('dashboard');
    Route::get('profile', [ProfileController::class, 'profileView'])->name('profile.view');
    Route::patch('profile', [ProfileController::class, 'profile'])->name('profile');
    Route::resource('companies', CompanyController::class);
    Route::resource('company_categories', CompanyCategoryController::class);
    Route::resource('counters', CounterController::class);
    Route::resource('histories', HistoryController::class);
    Route::resource('languages', LanguageController::class)->except('show');
    Route::resource('news_articles', NewsArticleController::class);
    Route::resource('partners', PartnerController::class)->except('show');
    Route::resource('product_categories', ProductCategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('settings', SettingController::class)->except(['create', 'store']);
    Route::resource('sliders', SliderController::class);
    Route::resource('translations', TranslationController::class);
    Route::resource('users', UserController::class)->except('show');
    Route::singleton('about', AboutController::class);
});

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'loginView'])->name('login.view');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});
