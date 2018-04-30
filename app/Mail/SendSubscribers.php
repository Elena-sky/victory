<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendSubscribers extends Mailable
{
    use Queueable, SerializesModels;

    protected $text_message;
    protected $subscribers;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subscribers, $text_message)
    {
        $this->subscribers = $subscribers;
        $this->text_message = $text_message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("alonasoroka@gmail.com")
            ->view('emails.sendSubscribers');
    }
}
