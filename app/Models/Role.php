<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Role extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
  
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
   
}
