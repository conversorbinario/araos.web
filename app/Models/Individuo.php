<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Individuo extends Model
{
    use HasFactory;


    public function avistamiento()
    {
        return $this->hasOne(Avistamento::class, null, 'avistamento_id');
    }

    public function tipoAve()
    {
        return $this->hasOne(Tipo_ave::class, null, 'tipo_ave_id');
    }

}
