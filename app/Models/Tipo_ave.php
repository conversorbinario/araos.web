<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_ave extends Model
{
    use HasFactory;


    public function xenero()
    {
        return $this->hasOne(Xen_espe::class, null, 'xenero_esp_id');
    }
}
