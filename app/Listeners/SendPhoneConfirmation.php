<?php

namespace App\Listeners;

use App\Events\PhoneConfirmation;
use App\Jobs\ProcessPhoneConfirmation;

class SendPhoneConfirmation
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PhoneConfirmation $event): void
    {
        dispatch(new ProcessPhoneConfirmation($event->phone));
    }
}
