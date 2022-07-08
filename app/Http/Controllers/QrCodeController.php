<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function index()
    {
      \SimpleSoftwareIO\QrCode\Facades\QrCode::size(500)
      ->merge('images/laravel.png', 0.5, true)
      ->generate('codingdriver.com', public_path('images/qrcode.png'));
      $users = User::where('id',1)->first();
      return view('user.profile',['users'=>$users]);
      
    }
}
