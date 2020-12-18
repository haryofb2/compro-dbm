<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cabang extends Model
{
    protected $table = 'cabangs';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
    public function info()
    {
        return $this->hasMany(Info::class);
    }

}