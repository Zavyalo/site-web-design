<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CaseImage extends Model
{
    use HasFactory;
    
    public function tags(): BelongsTo
    {
        return $this->belongsTo(Work::class);
    }
    public function getImageUrlAttribute()
    {
        return 'resources/images/' . $this->path_img;
    }
}
