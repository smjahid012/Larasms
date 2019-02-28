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
        'name', 'username', 'password', 'email', 'password','active','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function hasRole($roles){
        if (is_array($roles))
        {
            foreach($roles as $need_role){
                if($this->checkIfUserHasRole($need_role))
                {
                    return ture;
                }
            }
        }else {
            return $this->checkIfUserHasRole($roles);
        }
        return false;
    }
}
