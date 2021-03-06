<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Event extends Model
{
    protected $table = 'events';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function info()
    {
        return $this->belongsTo(Catevent::class);
    }
}
