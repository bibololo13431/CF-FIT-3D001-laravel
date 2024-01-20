<?php

namespace App\Listeners;

use App\Events\OrderEvent;
use App\Jobs\BookSendMailJob;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendMail
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
    public function handle(OrderEvent $event): void
    {
        $order= $event->order;
        BookSendMailJob::dispatch($order)->delay(Carbon::now()->addSecond(5));
        BookSendMailJob::dispatch($order)->delay(Carbon::now()->addSecond(10));
    }
}
