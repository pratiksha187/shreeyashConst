<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'slug', 'description', 'type', 'location', 'year', 'status'
    ];

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }
}

