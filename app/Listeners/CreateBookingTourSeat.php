<?php

namespace App\Listeners;

use App\Events\TourCreate;
use App\Models\SeatDetail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateBookingTourSeat
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
    public function handle(TourCreate $event): void
    {
        $tour=$event->tour;
        $seatqty = $tour->seatqty;

        if($seatqty > 0 ) {
            $seatdetail = [];
            $salt = uniqid();
            for ($i = 1; $i <= $seatqty; $i++){
                $seatdetail[] = ['seat_number' => $i.'A'.$salt, 'tour_id' => $tour->id];
            }
            SeatDetail::insert($seatdetail);
        }
    }
}
