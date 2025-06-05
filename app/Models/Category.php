<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    public function categories():BelongsToMany
    {
        return $this->belongstoMany(Category::class, 'post_category');
    }
}
