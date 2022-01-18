<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    //relacion de uno a muchos
    // un reprote le eprtenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Relacion polimorfica uno a uno
    //Un reporte pueden tener una imagen
    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }



}
