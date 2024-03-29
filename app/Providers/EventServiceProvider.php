<?php

namespace App\Providers;

use App\Events\SomeoneLoginAttempt;
use App\Listeners\SendLoginAttempt;
use App\Listeners\SendWelcomeNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            SendWelcomeNotification::class,
        ],
        SomeoneLoginAttempt::class=>[
            SendLoginAttempt::class 
        ],
        \Illuminate\Auth\Events\Lockout::class => [
            \App\Listeners\UserLockedOut::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
