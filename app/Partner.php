<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
    protected $table = 'w_m_partners';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

}