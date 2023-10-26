<?php

namespace App\Http\Controllers\Api\Categories;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class ListCategoriesController extends Controller
{
    public function __invoke(Request $request)
    {
        return Category::query()
            ->withCount(['sites' => function ($query) {
                $query->where('visible', '=', true);
            }])
            ->paginate();
    }
}
