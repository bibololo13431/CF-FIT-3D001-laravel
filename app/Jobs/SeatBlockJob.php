<?php

namespace App\Jobs;

use App\Models\SeatDetail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SeatBlockJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $seatNumbers;
    /**
     * Create a new job instance.
     */
    public function __construct($seatNumbers)
    {
        $this->seatNumbers = $seatNumbers;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $choseSeats = SeatDetail::whereIn('seat_number', $this->seatNumbers)->get();
        foreach ($choseSeats as $choseSeat) {
            if ($choseSeat->status !=='Booked' || $choseSeat->status !='PhoneBooked'){
                $choseSeat->update(['status'=>'available']);
            }
        }
    }
}
