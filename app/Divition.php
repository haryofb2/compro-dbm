<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Divition extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function employee()
    {
        return $this->hasMany('App\Employee');
    }


}
