<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LoginAlert extends Mailable
{
    use Queueable, SerializesModels;
    public $locked_time;
    public $name;
    public $email;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$name,$locked_time)
    {
        $this->email=$email;
        $this->name=$name;
        $this->locked_time=$locked_time;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Wrong Password Attempt Alert',$this->email)
        ->markdown('emails.LoginAlert');
        // return $this->view('emails.LoginAlert');
    }
}
