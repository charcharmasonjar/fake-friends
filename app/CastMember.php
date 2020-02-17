<?php

namespace App;

use App\Cast;
use Illuminate\Database\Eloquent\Model;

class CastMember extends Model
{
    protected $fillable = [
        'name', 'original_image_url', 'new_image_url'
    ];

    public function cast()
    {
        return $this->belongsTo(Cast::class);
    }
}
