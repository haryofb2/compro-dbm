<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fuel extends Model
{
    protected $table = 'fuel';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];
}
