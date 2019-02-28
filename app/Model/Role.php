<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable =['name'];
    protected $primaryKey= 'id';
    public $timestamps = false;

    public function users(){
        //users has many roles
        return $this->hasMany('App\Model\User','role_id','id');
    }
}
