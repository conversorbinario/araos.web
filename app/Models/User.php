<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function avistamentos()
    {
        return $this->hasMany(Avistamento::class, 'user_id');
    }


    // To determine the table name of the relationship's intermediate table,
    //  Eloquent will join the two related model names in alphabetical order. 
    // However, you are free to override this convention. 
    // You may do so by passing a second argument to the belongsToMany method

    public function avistamentosEtiquetados()
    {
        return $this->belongsToMany(Avistamento::class, 'user_avistas', 'user_id', 'avistamento_id');
    }

    
}
