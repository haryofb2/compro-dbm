<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CatMenu extends Model
{
    protected $table = 'w_m_category_menus';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function menu()
    {
        return $this->hasMany(Menu::class);
    }
}