<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    use HasFactory;

    public function avistamentos()
    {
        return $this->hasMany(Avistamento::class, 'coor_id');
    }
}
