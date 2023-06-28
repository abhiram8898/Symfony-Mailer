<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $organization;
    public $message2;
    public $attachmentPath;

    /**
     * Create a new message instance.
     *
     * @param  string  $name
     * @param  string  $email
     * @param  string  $phone
     * @param  string|null  $organization
     * @param  string  $message2
     * @param  string|null  $attachmentPath
     * @return void
     */
    public function __construct($name, $email, $phone, $organization, $message2, $attachmentPath = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->organization = $organization;
        $this->message2 = $message2;
        $this->attachmentPath = $attachmentPath;
    }

    /**
     * Build the message with optional attachment.
     *
     * @return $this
     */
    public function build()
    {
        $message = $this->view('emails.contact')
            ->subject('New Contact Form Submission');

        if ($this->attachmentPath) {
            $message->attachFromStorage($this->attachmentPath);
        }

        return $message;
    }
}
