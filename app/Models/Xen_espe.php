<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xen_espe extends Model
{
    use HasFactory;

    public function especies()
    {
        return $this->hasMany(Tipo_ave::class, 'xenero_esp_id');
    }
}
