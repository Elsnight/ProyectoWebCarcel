<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jail extends Model
{
    use HasFactory;

    //Relacionde uno a muchos
    //una carcel le pertenece a un pabellom
    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }

    //Relacionde muchos a muchos
    //Una carcel puefe tener muchos usuarios
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    //Relacion polimorfica uno auno
    //una carcel peude tener un aimagen
    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }

}