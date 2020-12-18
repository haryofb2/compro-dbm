<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Picture extends Model
{
    protected $table = 'w_m_picture';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    // public function cabang()
//     {
//         return $this->belongsTo('App\Cabang');
//     }
}