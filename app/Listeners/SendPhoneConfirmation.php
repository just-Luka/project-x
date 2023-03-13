<?php

namespace App\Listeners;

use App\Events\PhoneConfirmation;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Jobs\ProcessPhoneConfirmation;
use Symfony\Component\Console\Output\ConsoleOutput;

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
