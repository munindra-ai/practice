<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

use Intervention\Image\Facades\Image;

class UserProfile extends Component
{
    use WithFileUploads;

    public $avatar;
    public $firstname;
    public $newAvatar;
    public $user;
    public $profileUpdated = false;
    protected $rules =
    [
        'user.firstname' => 'required',
        'user.lastname' => 'required',
        'user.phone' => 'required|min:10',
        'user.gender' => 'required',
    ];

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function updateProfile(User $user, Request $request)

    {

            $validatedData = $this->validate([
            'avatar' =>'required',

        ]);
      
        
        $validatedData['avatar'] = $this->avatar->storeAs('slider_images', 'sliders');
        
        $this->profileUpdated = true;
    

        Auth::user()->update($validatedData);

        $this->validate();

        $this->user->save();
        session()->flash('successAlert', 'Updated Successfully !!');
        return redirect('/profile');
    }

    public function render()
    {
        return view('livewire.user-profile');
    }
}
