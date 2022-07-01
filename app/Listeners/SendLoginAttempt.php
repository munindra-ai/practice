<?php

namespace App\Listeners;

use App\Events\SomeoneLoginAttempt;
use App\Jobs\SendLoginAttemptJobs;
use App\Mail\SendMarkDownMail;
use App\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


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
    public function handle(SomeoneLoginAttempt $event)
    {
    
      
            Mail::to('manindratamang4@gmail.com ')->send(new SendMarkDownMail($event->maxAttempt));
            // Mail::to($user->email)->send(new SendMarkDownMail($event->maxAttempt));

        // $delay=now()->addSecond(10);
        // SendLoginAttemptJobs::dispatch($event->user)->delay($delay);
    }
}
