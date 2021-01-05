<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Planfuel extends Model
{
    protected $table = 'plan_fuel';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];
}