<?php

namespace App\Http\Controllers\client;

use App\Events\SeatBook;
use App\Http\Controllers\Controller;
use App\Models\SeatDetail;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BookingSeatController extends Controller
{

    public function bookSeat ($id) {
        $tour = Tour::findOrFail($id);
        session(['tour_id' => $tour->id]);
        $seatDetails = SeatDetail::where('tour_id', $tour->id)->get();
        
        return view('client.pages.booking_seat_detail', ['searchBar' => false, 'tour' => $tour, 'seatDetails' => $seatDetails]);
    }

    public function placeSeat(Request $request) {
        $selectedSeat = $request->input('selectedSeat');
        $seatNumbers = explode(',',$selectedSeat);
        $seatNumbers = array_map('trim', $seatNumbers);
        // SeatDetail::whereIn('seat_number', $seatNumbers)->update(['status' => 'Booked']);
        $countSeat = count($seatNumbers);
        $tourId = session('tour_id');
        $tour = Tour::findOrFail($tourId);
        session(['seatNumbers' => $seatNumbers, 'tourId' => $tourId, 'countSeat' => $countSeat]);
        // $tour->actualseat = max(0, $tour->actualseat - $countSeat);
        // $tour->save();
        // event(new SeatBook($tour));
        return view('client.pages.checkout', ['selectedSeat'=> $selectedSeat, 'tour' => $tour, 'countSeat' => $countSeat, 'searchBar' => false]);
    }

}