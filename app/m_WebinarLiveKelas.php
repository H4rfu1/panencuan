<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_WebinarLiveKelas extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'webinar_livekelas';
    protected $primaryKey = 'id_webinar_livekelas';
    public $timestamps = false;
    protected $fillable = [
        'id_pembuat', 'judul', 'opsi', 'deskripsi', 'waktu', 'harga', 'image', 'kuota'
    ];

}
