<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    
    /**
     * Проставление связи c Users
     *
     */
    public function user(){
        return $this->belongsToMany(User::class);
    }

}
