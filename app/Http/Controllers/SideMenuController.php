<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
class SideMenuController extends Controller
{
    public function getMenu()
    {
        $menu = new Role;
        $menuList = $menu->tree();
        return view('threelevelmenu.index')->with('menulist', $menuList);;
    }
}
