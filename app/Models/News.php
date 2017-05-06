<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * Проставление связи с Users
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
