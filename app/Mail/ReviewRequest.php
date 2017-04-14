<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReviewRequest extends Mailable
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
         return $this->from('hello@sogenius.io', 'So Genius I/O')
            ->subject( $this->data['firstname'] . ', we\'d love to hear from you ')
                ->markdown('emails.review-request')
                    ->with([
                        'firstname' => $this->data['firstname'],
                        'url' => $this->data['url'],
                    ]);;
    }
}
