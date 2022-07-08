<?php

namespace App\Http\Controllers;
use App\Sidebar;
use App\NewSubMenu;
use Illuminate\Http\Request;

class SideBarCategoryController extends Controller
{
    public function backend(){
        $data = SideBar::all();
        $submenu = NewSubMenu::all();
        return view('backend',['data'=>$data,'submenu'=>$submenu]);
    }
}
