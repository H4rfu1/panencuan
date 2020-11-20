<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_videoPembelajaran extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'data_video';
    protected $primaryKey = 'id_video';
    public $timestamps = false;
    protected $fillable = [
        'url_video', 'deskripsi_video',  'judul', '	id_pemateri'
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
