<?php

use App\Http\Controllers\Frontend\{
    AboutController,
    CompanyCategoryController,
    ContactController,
    HomeController,
    NewsArticleController,
    ProductController,
};

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('about-us', [AboutController::class, 'show'])->name('about.show');
Route::get('company-categories/{companyCategory:slug}', [CompanyCategoryController::class, 'show'])->name('company_categories.show');
Route::get('contact', [ContactController::class, 'show'])->name('contact.show');
Route::get('news', [NewsArticleController::class, 'index'])->name('news.index');
Route::get('news/{newsArticle:slug}', [NewsArticleController::class, 'show'])->name('news.show');
Route::get('products', [ProductController::class, 'index'])->name('products.index');

