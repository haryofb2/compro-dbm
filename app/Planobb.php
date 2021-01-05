<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Planobb extends Model
{
    protected $table = 'plan_ore';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];
}