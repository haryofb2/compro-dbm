<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function divition()
    {
        return $this->belongsTo('App\Divition');
    }

    public function position()
    {
        return $this->belongsTo('App\Position');
    }

    public function cabang()
    {
        return $this->belongsTo('App\Cabang');
    }


}