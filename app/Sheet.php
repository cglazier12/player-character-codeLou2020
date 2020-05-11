<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sheet extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
