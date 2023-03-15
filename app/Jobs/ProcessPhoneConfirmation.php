<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class ProcessPhoneConfirmation implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $phone;

    /**
     * Create a new job instance.
     */
    public function __construct(string $phone)
    {
        $this->phone = $phone;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        echo $this->phone;
        // SEND confirmation number on the phone
    }
}
