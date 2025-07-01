<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Work extends Model
{
    use HasFactory;

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'work_tags');
    }
    public function images(): HasMany
    {
        return $this->hasMany(CaseImage::class);
    }

    public function getImageUrlAttribute()
    {
        return 'resources/images/' . $this->path_img ;
    }
}
