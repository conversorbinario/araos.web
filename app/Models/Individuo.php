<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Individuo extends Model
{
    use HasFactory;

    

    public function avistamiento()
    {
        return $this->belongsTo(Avistamento::class,'avistamento_id');
    }

    public function tipoAve()
    {
        return $this->belongsTo(Tipo_ave::class, 'tipo_ave_id');
    }

    public function media()
    {
        return $this->hasMany(Media_individuo::class, 'individuo_id');
    }



}
