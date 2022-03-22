<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avistamento extends Model
{
    use HasFactory;



    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function coordinadas()
    {
        return $this->belongsTo(Lugar::class, 'coor_id');
    }

    public function individuos()
    {
        return $this->hasMany(Individuo::class, 'avistamento_id');
    }


}
