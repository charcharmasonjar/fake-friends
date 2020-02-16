<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    protected $fillable = [
        'name'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
