<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    protected $table = 'w_m_menus';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];}