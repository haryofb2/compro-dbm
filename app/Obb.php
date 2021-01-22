<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Obb extends Model
{
    protected $table = 'obb';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    // public function planobb()
    // {
    //     return $this->belongsTo("App\Planobb");
    // }

}