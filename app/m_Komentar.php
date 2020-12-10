<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_Komentar extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'komentar';
    protected $primaryKey = 'id_komentar';
    public $timestamps = false;
    protected $fillable = [
        'id_diskusi', 'id_pengomentar', 'komentar', 'tanggal_komen'
    ];

}
