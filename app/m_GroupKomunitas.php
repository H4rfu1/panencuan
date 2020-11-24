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
    protected $table = 'grup komunitas';
    public $timestamps = false;
    protected $fillable = [
        'id_user', 'komentar', 'tanggal_komen'
    ];

}
