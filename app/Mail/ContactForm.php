<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         return $this->from('contact@sogenius.io', 'So Genius I/O')
            ->subject( 'You\'ve got an email from ' . $this->data['fullname'] )
                ->markdown('emails.contact-form')
                    ->with([
                        'fullname' => $this->data['fullname'],
                    ]);;    
    }
}
