<?php

namespace App\Http\Controllers\Api\Sites;

use App\Actions\SiteSearcher;
use App\Http\Controllers\Controller;
use App\Http\Requests\SearchSiteRequest;

class SearchSitesController extends Controller
{
    public function __invoke(SearchSiteRequest $request)
    {
        $data = $request->safe();

        return SiteSearcher::find(...$data)
            ->withCount('votes')
            ->orderBy('votes_count')
            ->paginate();
    }
}
