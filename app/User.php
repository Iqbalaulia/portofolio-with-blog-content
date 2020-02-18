<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'photo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // relasi

    public function DetailProfiles(){
        return $this->hasMany(DetailProfile::class, 'username','id','name','email');        
    }

    public function Education(){
        return $this->hasMany(Education::class, 'username','id','name','email');        
    }

    public function Experience(){
        return $this->hasMany(Experience::class, 'username','id','name','email');        
    }

    public function Skill(){
        return $this->hasMany(Skill::class, 'username','id','name','email');        
    }
}
