<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function account()
	{
	}

	public function profile()
	{
		$user = Auth::user();
		$heading = 'My Profile';
		

		return view('frontend.user.profile', compact([
			'user',
			'heading'
		]));
	}

	public function updateProfile(User $user, Request $request)
	{
		if (Auth::user()->id != $user->id) {
			$authUser = Auth::user();
			$authUser->spam_count += 1;
			$authUser->update();
			return back()->with('error', 'Permission denied.');
		}
		// if ($request->hasfile('avatar')){

		// 	$avatar=$request->file('avatar');
		// 	$name= time().'.'.$avatar->getClientOriginalExtension();
		// 	$filename='/avatars/'.$name;
		// 	Image::make($avatar)->resize(300,300)->store('slider_images', 'sliders');
		// 	// save(public_path('/uploads/'.$filename));
		// 	$user=Auth::user();
		// 	$user->avatar= $filename;
		// }
		// $user->save();

		$request->validate(
			[
				'name' => 'required',
				'mobile' => 'required',
				'email' => 'required|email|max:255|exists:users',
				'avatar' => 'required|image|mimes: jpg,jpeg,png,PNG',
			],
			[
				//custom error message shown garna ko lagi 
				'avatar.image' => 'Image should be jpg,jpeg,png'
			]
		);
		$user->name = $request->name;
		$user->mobile = $request->mobile;
		$user->address = $request->address;
		$user->gender = $request->gender;
		$user->update();

	

		return back()->with('success', 'Profile updated successfully.');


	
	}
	
	public function update_avatar(Request $request){
		$user = Auth::user();
		$heading = 'My Profile';
		if ($request->hasfile('avatar')){

			$avatar=$request->file('avatar');
			$name= time().'.'.$avatar->getClientOriginalExtension();
			$filename='/avatars/'.$name;
			Image::make($avatar)->resize(300,300)->save(public_path('/uploads/'.$filename));
			$user=Auth::user();
			$user->avatar= $filename;
		}
		
		$user->save();
		

		return view('frontend.user.profile', compact([
			'user',
			'heading'
		]));
		
	}
}
