<?php

namespace App\Listeners;

use App\Events\ContactEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail as ConEmail;

class SendContactEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
     
    }

    /**
     * Handle the event.
     */
    public function handle(ContactEmail $event)
    {
        //dd($event->user['email']);
        Mail::to($event->user['email'])->send(new ConEmail($event->user));
    }
}
