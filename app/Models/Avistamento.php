<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avistamento extends Model
{
    use HasFactory;



    public function usuario()
    {
        return $this->belongsTo(User::class, null, 'user_id');
    }

    public function coordinadas()
    {
        return $this->hasOne(Lugar::class, null, 'coor_id');
    }


}
