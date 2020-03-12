<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    const
        PENDING = 0,
        APPROVED = 1,
        REJECTED = 2;

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
