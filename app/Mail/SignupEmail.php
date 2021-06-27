<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SignupEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $data)
    {
        $this->email_data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->from(env('from@example.com'), 'Magic Elves')->subject("You are awesome!")->view('mail.signup-email', ['email_data'=> $this->email_data]);
        //return $this->from(env('MAIL_USERNAME'))->subject("Welcome to coderaweso.me!")->view('mail.signup-email', ['email_data'=> $this->email_data]);

        /*return $this->view('mail.signup-email', ['email_data'=> $this->email_data]);*/
        /*return $this->from('from@example.com', 'Magic Elves')
        ->subject('You are awesome!')
        ->markdown('mails.exmpl')
        ->with([
            'name' => 'New Mailtrap User',
            'link' => 'https://mailtrap.io/inboxes'
        ]);*/

        return $this->from('mailgun@sandbox3a66c8287dfe4e85ac428bf498bd5820.mailgun.org',"Mon site")
                        ->view('mail.signup-email', ['email_data'=> $this->email_data]);
    

    }
}
