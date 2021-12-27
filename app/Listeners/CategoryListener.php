<?php

namespace App\Listeners;

use App\Events\CategoryEvent;
use App\Mail\MarkdownMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class CategoryListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(CategoryEvent $event)
    {
        Mail::to('nangdi00@gmail.com')->send(new MarkdownMail($event->category));
    }
}
