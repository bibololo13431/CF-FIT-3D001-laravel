<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\BookClientEmail;
use App\Models\Order;
use App\Models\OrderPaymentMethod;
use App\Models\SeatDetail;
use Illuminate\Support\Facades\Mail;

class PhoneBookController extends Controller
{
    public function index() {
        $phoneBooks = Order::where('payment_method', 'PHONEBOOK')
                            ->where('status', 'pending')
                            ->get();
        return view('admin.pages.booking.phonebook.index', compact('phoneBooks'));
    }

    public function confirm(string $id) {
        $order = Order::findOrFail($id);
        $orderName = $order->name;
        $order->status = 'success';
        $order->save();
        $orderPayMentMethod = OrderPaymentMethod::where('order_id', $order->id )->first();
        If($orderPayMentMethod){
            $orderPayMentMethod->status ='success';
            $orderPayMentMethod->save();
        }
        
        $seatNumbers = explode(',', $order->seatdetail);
        $seatNumbers = array_map('trim', $seatNumbers);
        SeatDetail::whereIn('seat_number', $seatNumbers)->update(['status' => 'PhoneBooked']);
        $numberSeat = $order->total / $order->tour->price ;
        $actualSeatTour = $order->tour->actualseat;
        $order->tour->actualseat = max(0, $actualSeatTour - $numberSeat);
        $order->tour->save();
        Mail::to('nguyenngocthien7742@gmail.com')->send(new BookClientEmail($order));

        return redirect()->route('admin.pages.dashboard')->with('msg', "Confirm order của $orderName thành công");
    }

    public function cancel(string $id) {
        $order = Order::findOrFail($id);
        $orderName = $order->name;
        $order->status = 'cancel';
        $order->save();
        $orderPayMentMethod = OrderPaymentMethod::where('order_id', $order->id )->first();
        If($orderPayMentMethod){
            $orderPayMentMethod->status ='cancel';
            $orderPayMentMethod->save();
        }
        return redirect()->route('admin.pages.dashboard')->with('msg', "Đã cancel order của $orderName do không liên lạc được");
    }
}
