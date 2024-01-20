<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\SeatDetail;
use App\Models\Tour;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index () {
        return view('client.pages.home');
    }

    public function search(Request $request) {
        $name = $request -> input('name');
        $date = $request -> input ('date');
        $seatqty = $request -> input('seatqty');
        $query = Tour::where('status','=', 1);

        if ($name) {
            $query->where('name', 'like', '%' . $name . '%')
                  ->whereDate('date', '>=', now());
        }
    
        if ($date) {
            $query->whereDate('date', '>=', now())
                  ->whereDate('date', '>=', Carbon::parse($date));
        }

        if ($seatqty) {
            if ($seatqty) {
                $query->where('actualseat', '>=', $seatqty);
            }
        }
        
        if(!$seatqty && !$date && !$name){
            $query ->whereDate('date', '>=', now());
        }
        $tours = $query->get();

        return view('client.pages.search_result')->with('tours', $tours);
    }
}
