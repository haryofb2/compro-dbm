<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ore extends Model
{
    protected $table = 'ore';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];
}
