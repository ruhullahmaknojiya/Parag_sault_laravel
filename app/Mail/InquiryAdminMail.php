<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InquiryAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     */
    public function __construct($details)
    {

        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('admin.emails.inquiry_admin')
            ->with('details', $this->details);

//        return $this->subject('Contact  Inquiry Received')
//            ->view('admin.emails.inquiry_admin');
    }

    public function attachments(): array
    {
        return [];
    }
}
