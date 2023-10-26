<?php

namespace App\Http\Controllers\Api\Sites;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SingleSiteController extends Controller
{
    public function __invoke(Site $site): \Illuminate\Http\JsonResponse
    {
        if (!$site->visible) {
            throw new NotFoundHttpException('No query results for model [App\Models\Site] ' . $site->id);
        }

        $site = $site->load('votes');

        return response()->json($site->toArray());
    }
}
