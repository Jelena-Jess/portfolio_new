<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;
   
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $nam;
    public $mail;
    public $phon;
    public $msg;
    
    public function __construct($name, $email, $phone, $message)
    {
        $this->nam=$name;
        $this->mail=$email;
        $this->phon=$phone;
        $this->msg=$message;
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_name = $this->nam;
        $e_phone = $this->phon;
        $e_email = $this->mail;
        $e_msg = $this->msg;
        return $this->view('pages.contact_email', compact("e_name", "e_email", "e_phone",  "e_msg"));
        //here is your blade view name
    }
}
