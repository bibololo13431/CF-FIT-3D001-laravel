<?php

namespace App\Listeners;

use App\Events\SeatBook;
use App\Events\SeatStatusEvent;
use App\Models\SeatDetail;
use App\Models\Tour;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SeatStatusListener
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
    public function handle(SeatStatusEvent $event): void
    {
        SeatDetail::whereIn('seat_number', $event->seatNumbers)->update(['status' => 'Booked']);
        $tour = Tour::findOrFail($event->tourId);
        $tour->actualseat = max(0, $tour->actualseat - $event->countSeat);
        $tour->save();
        event(new SeatBook($tour));
    }
}
