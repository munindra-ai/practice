<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Role;

class Role extends Model
{
    use HasFactory;
    public function parent()
{
    return $this->hasOne('App\Role', 'id', 'parent_id')->orderBy('sort_order');
}

public function children()
{

    return $this->hasMany('App\Role', 'parent_id', 'id')->orderBy('sort_order');
}

public static function tree()
{
    return static::with(implode('.', array_fill(0, 100, 'children')))->where('parent_id', '=', '0')->orderBy('sort_order')->get();
}
}
