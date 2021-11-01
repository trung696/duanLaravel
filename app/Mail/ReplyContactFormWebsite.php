<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReplyContactFormWebsite extends Mailable
{
    use Queueable, SerializesModels;

    public $reply_message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reply_message)
    {
        $this->reply_message = $reply_message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('hieunuce11@gmail.com')->subject('Salon-hair')->view('emails.ReplyContactFormWebsite');
    }
}
