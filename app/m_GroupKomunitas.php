<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_GroupKomunitas extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'grup Komunitas';
    protected $primaryKey = 'id Komunitas';
    public $timestamps = false;
    protected $fillable = [
        'id member', 'id pemateri'
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
}
