<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Service extends Model
{
    protected $table = 'w_services';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

}
