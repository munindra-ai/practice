<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use \Barryvdh\DomPDF\Facade\Pdf;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;

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

		$request->validate(
			[
				'firstname' => 'required',
				'lastname' => 'required',
				'phone' => 'required',
				'email' => 'required|email|max:255|exists:users',
				'avatar'=>'required',

			]
		);
		$user->firstname = $request->name;
		$user->lastname = $request->name;
		$user->phone = $request->mobile;
		$user->address = $request->address;
		$user->gender = $request->gender;
		// $user->avatar =$request->avatar;
		


        session()->flash('message', 'Image has been successfully Uploaded.');
		$user->update();
		// Auth::user()->update($validatedData);
		return view('frontend.user.profile', compact([
			'user',
			'heading'
		]));



	}

	public function update_avatar(Request $request)
	{
		$user = Auth::user();
		$heading = 'My Profile';
		if ($request->hasfile('avatar')) {

			$avatar = $request->file('avatar');
			$name = time() . '.' . $avatar->getClientOriginalExtension();
			$filename = '/avatars/' . $name;
			Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/' . $filename));
			$user = Auth::user();
			$user->avatar = $filename;
		}
		

		$user->save();


		return view('frontend.user.profile', compact([
			'user',
			'heading'
		]));
	}
	public function PrintPDF()
	{
		 $user = Auth::user();
		$pdf = App::make('dompdf.wrapper');
		$pdf = $pdf->loadView('pdf.id', compact('user'));
		return $pdf->stream();

		// return $pdf->download('disney.pdf');
	}
}
