<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_AnalisaEmiten extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'analisa_emiten';
    protected $primaryKey = 'id_emiten';
    public $timestamps = false;
    protected $fillable = [
        'nama_perusahaan', 'health', 'growth', 'value'
    ];
}
