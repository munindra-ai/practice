<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\LockedOut;
use Illuminate\Auth\Events\Lockout;
use App\User;

class UserLockedOut
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(Lockout $event)
    {
        if ($user = User::where('email', $event->request->email)->first()) {
            $user->notify(new LockedOut);
        }
    }
}
