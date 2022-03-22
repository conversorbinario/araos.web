<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_ave extends Model
{
    use HasFactory;

    public function tipoAve()
    {
        return $this->hasMany(Individuo::class, 'tipo_ave_id');
    }


    public function xenero()
    {
        return $this->belongsTo(Xen_espe::class, 'xenero_esp_id');
    }
}
