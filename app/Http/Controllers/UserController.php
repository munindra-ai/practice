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

		$request->validate([
			'name' => 'required',
			'mobile' => 'required',
			'email' => 'required|email|max:255|exists:users',
		]);

		$user->name = $request->name;
		$user->mobile = $request->mobile;
		$user->address = $request->address;
		$user->gender = $request->gender;
		$user->update();

		return back()->with('success', 'Profile updated successfully.');
	}
	public function update_avatar(Request $request){
		if($request->hasFile('avatars')){
    		$avatars = $request->file('avatars');
			$file = $request->file('image');
    		$filename = time() . '.' . $avatars->getClientOriginalExtension();
			$path = public_path().'/uploads/avatars/';
			$uplaod = $file->move($path,$filename);
			return $filename;
    		Image::make($avatars)->resize(300, 300)->save( public_path('/src/uploads/avatars/' . $filename ) );

    		$user = Auth::user();
    		$user->avatars = $filename;
    		$user->save();

	}
	return view('livewire.user-profile', array('user' => Auth::user()) );
}
}