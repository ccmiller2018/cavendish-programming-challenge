<?php

namespace App\Http\Controllers\Api\Sites;

use App\Http\Controllers\Controller;
use App\Models\Site;
use App\Models\Vote;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class VoteController extends Controller
{
    public function __invoke(Request $request, Site $site): JsonResponse
    {
        if (!$site->visible) {
            throw new NotFoundHttpException('No query results for model [App\Models\Site] ' . $site->id);
        }

        $user = Auth::user();

        try {
            $vote = Vote::query()
                ->where('user_id', '=', $user->getAuthIdentifier())
                ->where('site_id', '=', $site->id)
                ->firstOrFail();

            $vote->delete();

            return response()->json(['message' => 'successfully removed your up vote']);
        } catch (Exception $exception) {
            Vote::create([
                'user_id' => $user->getAuthIdentifier(),
                'site_id' => $site->id,
            ]);

            return response()->json(['message' => 'successfully added your up vote']);
        }
    }
}
