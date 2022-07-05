<?php

namespace App\Listeners;

use App\Events\SomeoneLoginAttempt;
use App\Jobs\SendLoginAttemptJobs;
use App\Mail\SendMarkDownMail;
use App\Mail\WelcomeEmail;
use App\Mail\WelcomeMail;
use App\Notifications\LoginAlertNotification;
use App\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Auth\Events\Lockout;



class SendLoginAttempt
{
    use AuthenticatesUsers;
    
   
    /**
     * 
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
     * @param  \App\Events\SomeoneLoginAttempt  $event
     * @return void
     */
    public function handle(SomeoneLoginAttempt $event )
    {
        if ($user = User::where('email', $event->request->email)->first()) {
            $user->notify(new LoginAlertNotification($user->email));
            $user['is_account_Locked'] ='0';
            $user->save();
        }
    
}
}
