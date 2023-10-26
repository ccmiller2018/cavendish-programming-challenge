<?php

namespace App\Http\Controllers\Api\Sites;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Site;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Request $request, Site $site)
    {
        $categoryIds = Category::whereIn(
            'name',
            $request->input('category'),
        )->pluck('id');

        $site->update([
            'name' => $request->string('name')->toString(),
            'url' => $request->string('url')->toString(),
            'description' => $request->string('description')->toString(),
        ]);

        $site->categories()->sync($categoryIds);

        return response()->json(['message' => 'safely updated the site']);
    }
}
