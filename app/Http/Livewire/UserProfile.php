<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserProfile extends Component
{
    use WithFileUploads;
    public $user;
    public $profileUpdated = false;
    protected $rules =
    [
        'user.name' => 'required',
        'user.mobile' => 'required|min:10',
        'user.gender' => 'required',
        'user.profile'=>'required',
    ];

    public function mount(User $user)
    {
        $this->user = $user;       
    }

    public function updateProfile()
    {
        $this->validate();
        $this->user->save();
        $this->profileUpdated = true;
    }

    public function render()
    {
        return view('livewire.user-profile');
    }
}
