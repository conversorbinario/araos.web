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

        //la relacion individuos-avistamientos es de dos tipos
    //  individuos  (1, 1)        ---   realizar ----          (1,n) avistamentos
    //  individuos  (1, n)        ---   estar etiquetado ----          (0,n) avistamentos

    //por eso hay dos metodos que traen los individuos (uno con hasMany y otro con belongstoMany)


    public function individuos()
    {
        return $this->hasMany(Individuo::class, 'avistamento_id');
    }


    public function individuosEtiquetados()
    {
        return $this->belongsToMany(Avistamento::class, 'user_avistas', 'avistamento_id','user_id');
    }



}
