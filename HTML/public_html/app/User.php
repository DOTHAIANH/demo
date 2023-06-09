<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    public function getImageAttribute($key)
    {
        $image =  $this->getOriginal('image');
        if(empty($image)){
            $image = "https://www.gravatar.com/avatar/?&s=50";
        }
        return $image;
    }


    public function isSuperAdmin() {
        return $this->hasRole('Super Admin');
    }

    public function isAdmin() {
        return $this->hasRole('Admin');
    }

    public function isDaiLy() {
        return $this->hasRole('Đại lý');
    }
}
