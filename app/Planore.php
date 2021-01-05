<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Planore extends Model
{
    protected $table = 'plan_ore';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];
}