<?php

namespace App\Http\Controllers\Api\Categories\Sites;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Site;
use Illuminate\Http\Request;

class ListSitesInCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Category $category)
    {
        return $category->sites()
            ->where('visible', '=', 1)
            ->withCount('votes')
            ->paginate();
    }
}
