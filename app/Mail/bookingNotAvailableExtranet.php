<?php

namespace App\Mail;

use App\booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class bookingNotAvailableExtranet extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $booking;
    
    public function __construct(booking $booking)
    {
        $this->booking = $booking;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Booking Not Available')->markdown('mails.extranet.bookingNotAvailable');
    }
}
