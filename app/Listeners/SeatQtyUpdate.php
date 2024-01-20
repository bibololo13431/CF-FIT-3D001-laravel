<?php

namespace App\Listeners;

use App\Events\SeatBook;
use App\Models\Tour;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SeatQtyUpdate
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
    public function handle(SeatBook $event): void
    {
        $tour = $event->tour;
        $tour->actualseat;
        if ($tour->actualseat == 0) {
            $tour->status = '0';
        }
        $tour->save();
    }
}
