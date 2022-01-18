<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'path',
    ];


    //Relacion polimorfica unoa uno
    //Una imagen le pertence a un usuario reporte pabellon y carcel
    public function imageable()
    {
        return $this->morphTo();
    }

    use HasFactory;
}
