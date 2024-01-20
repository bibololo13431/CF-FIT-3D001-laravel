<?php

namespace App\Listeners;

use App\Events\TourEdit;
use App\Models\SeatDetail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class EditBookingTourSeat
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
    public function handle(TourEdit $event): void
    {
        $tour = $event->tour;
        $newSeatDetail = $event-> newSeatqty;

        $oldSeatdetail = SeatDetail::where('tour_id', $tour -> id)->count();
        $salt = uniqid();
        
        if ($newSeatDetail < $oldSeatdetail) {
            SeatDetail::where('tour_id', $tour->id)
            ->orderBy('id','desc')
            ->limit($oldSeatdetail - $newSeatDetail)
            ->delete();
        } elseif ($newSeatDetail > $oldSeatdetail) {
            $addSeat = [];
            for ($i = $oldSeatdetail + 1 ; $i <= $newSeatDetail; $i++ ){
                $addSeat[] = ['seat_number' =>$i . 'A'.$salt, 'tour_id'=>$tour->id];
            }   
            SeatDetail::insert($addSeat);
        }
        if ($newSeatDetail < $oldSeatdetail) {
            SeatDetail::where('tour_id', $tour->id)
                ->orderBy('id', 'asc')
                ->limit($oldSeatdetail - $newSeatDetail)
                ->update(['tour_id' => null]);
        }
    }
}
