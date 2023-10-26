<?php

namespace App\Actions;

use App\Models\Site;
use Illuminate\Database\Eloquent\Builder;

class SiteSearcher
{
    public static function find(
        ?string $url = null,
        ?string $name = null,
    ): Builder {
        $query = Site::query();

        if (!is_null($url)) {
            $query = $query->where('url', 'like', "%${url}%");
        }

        if (!is_null($name)) {
            $query = $query->where('name', 'like', "%${name}%");
        }

        return $query->where('visible', '=', true);
    }
}
