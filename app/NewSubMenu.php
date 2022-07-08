<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewSubMenu extends Model
{
    use HasFactory;
    public function category(){
        $this->belongsto(SideBar::class);
    }
}
