<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseImage extends Model
{
    use HasFactory;
    
    public function getImageUrlAttribute()
    {
        return asset('resources/images/' . $this->path_img);
    }
}
