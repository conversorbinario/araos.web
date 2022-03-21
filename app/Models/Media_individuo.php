<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media_individuo extends Model
{
    use HasFactory;


    public function individuo()
    {
        return $this->hasOne(Individuo::class, null, 'individuo_id');
    }
}
