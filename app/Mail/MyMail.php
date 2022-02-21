<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class Mymail extends Mailable
{
    use Queueable, SerializesModels;
    public $first_name;
    public $email;
    public $password;
    public $QRpassword;
    public $created_at;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($first_name,$email,$password,$QRpassword,$created_at)
    {
        $this->first_name=$first_name;
        $this->email=$email;
        $this->password=$password;
        $this->QRpassword=$QRpassword;
        $this->$created_at=$created_at;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mymail');
    }
}
