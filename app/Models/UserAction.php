<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class UserAction extends Model
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'usersActivity';
    protected $fillable = [
        'description', 'ip_address','users_id','user_agent','created_at'
    ];

    public function users(){
        return $this->belongsTo('App\Models\User','users_id','id');
    }
}
