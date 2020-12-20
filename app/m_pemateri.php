<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_pemateri extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password', 'username', 'jenis_kelamin', 'tanggal', 'kota', 'no_hp', 'nim', 'jurusan', 'status_id', 'role_id'
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
