<?php

use App\Http\Controllers\Api\Categories\Sites\ListSitesInCategoryController;
use App\Http\Controllers\Api\Sites\SearchSitesController;
use App\Http\Controllers\Api\Sites\SingleSiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Categories\ListCategoriesController;

Route::get('/categories', ListCategoriesController::class)
    ->name('api.categories.list');

Route::get('/categories/{category}', ListSitesInCategoryController::class)
    ->name('api.category');

Route::post('/sites/search', SearchSitesController::class)
    ->name('api.sites.search');

Route::get('/sites/{site}', SingleSiteController::class)
    ->name('api.site');
