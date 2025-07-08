<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory;
    public function hashtags(): BelongsToMany
    {
        return $this->belongsToMany(Hashtag::class, 'article_hashtags');
    }
    public function getImageUrlAttribute()
    {
        return 'resources/images/' . $this->path_img;
    }
}
