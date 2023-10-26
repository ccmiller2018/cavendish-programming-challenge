<?php

namespace App\Http\Controllers\Api\Sites;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VisibilityController extends Controller
{
    public function __invoke(Site $site): JsonResponse
    {
        $site->visible = !$site->visible;

        $site->save();

        return response()->json(['message' => 'successfully toggled visibility']);
    }
}
