<?php

namespace App\Http\Controllers\Api\Sites;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSiteRequest;
use App\Models\Category;
use App\Models\Site;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(CreateSiteRequest $request): \Illuminate\Http\JsonResponse
    {
        $categoryIds = Category::whereIn(
            'name',
            $request->input('category'),
        )->pluck('id');

        $site = Site::create([
            'name' => $request->string('name')->toString(),
            'url' => $request->string('url')->toString(),
            'description' => $request->string('description')->toString(),
        ]);

        $site->categories()->sync($categoryIds);

        return response()->json(['message' => 'safely created the site']);
    }
}
