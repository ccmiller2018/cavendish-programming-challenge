<?php

namespace App\Http\Controllers\Api\Sites;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Site $site): JsonResponse
    {
        $site->delete();

        return response()->json(['message' => 'Successfully deleted the site', 200]);
    }
}
