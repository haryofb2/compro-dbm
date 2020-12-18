<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Info extends Model
{
    protected $table = 'infos';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function cabang()
    {
        return $this->belongsTo('App\Cabang');
    }
}
