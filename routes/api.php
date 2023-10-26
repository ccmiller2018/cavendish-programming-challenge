<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\MeController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Categories\Sites\ListSitesInCategoryController;
use App\Http\Controllers\Api\Sites\SearchSitesController;
use App\Http\Controllers\Api\Sites\SingleSiteController;
use App\Http\Controllers\Api\Sites\VoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Categories\ListCategoriesController;

Route::post('/register', RegisterController::class)
    ->name('api.register');

Route::post('/login', LoginController::class)
    ->name('api.login');

Route::get('/logout', LogoutController::class)
    ->middleware('auth:sanctum')
    ->name('api.logout');

Route::get('/me', MeController::class)->middleware('auth:sanctum')
    ->name('api.me');

Route::get('/categories', ListCategoriesController::class)
    ->name('api.categories.list');

Route::get('/categories/{category}', ListSitesInCategoryController::class)
    ->name('api.category');

Route::post('/sites/search', SearchSitesController::class)
    ->name('api.sites.search');

Route::get('/sites/{site}', SingleSiteController::class)
    ->name('api.site');

Route::get('/sites/{site}/vote', VoteController::class)
    ->middleware('auth:sanctum')
    ->name('api.site.vote');
