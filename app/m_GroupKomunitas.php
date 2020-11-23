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

}
