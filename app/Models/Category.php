<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;
    use HasUlids;

    protected $perPage = 50;
    protected $fillable = [
        'name'
    ];

    public function sites(): BelongsToMany {
        return $this->belongsToMany(Site::class);
    }
}
