<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    //relacionde uno a muchos
    // un rol puede tenr muchos usuarios

    public function users(){
        return $this->hasMany(User::class);
    }
}
