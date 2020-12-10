<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_Diskusi extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'diskusi';
    protected $primaryKey = 'id_diskusi';
    public $timestamps = false;
    protected $fillable = [
        'id_pembuat', 'judul_diskusi', 'deskripsi_diskusi', 'tanggal_dibuat'
    ];

}
