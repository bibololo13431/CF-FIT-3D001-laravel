<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Service\VNPAYService;
use App\Mail\BookAdminEmail;
use App\Mail\BookClientEmail;
use App\Models\Order;
use App\Models\OrderPaymentMethod;
use App\Models\Tour;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class PlaceOrderController extends Controller
{
    private $vnpayService;

    public function __construct(VNPAYService $vnpayService){
        $this->vnpayService = $vnpayService;
    }

    public function placeOrder(Request $request){
        try{
            DB::beginTransaction();
            $tour_id = session()->get('tour_id', []);
            $tour = Tour::find($tour_id);
            $countSeat = $request->input('countSeat');
            $total = $tour->price * $countSeat;
            $order = Order::create([
                'name' => $request->name,
                'address' => $request->address,
                'email' => $request->email,
                'phone' => $request->phone,
                'seatdetail'=>$request->seatdetail,
                'payment_method' => $request->payment_method,
                'status' => 'pending',
                'tourpayment_id' => $tour_id,
            ]);
            $order -> total = $total;
            $order -> save();
            OrderPaymentMethod::create([
                'total' => $total,
                'payment_method' => $request->payment_method,
                'status' => 'pending',
                'order_id' => $order->id
            ]);
    

            DB::commit();
            // Mail::to('nguyenngocthien7742@gmail.com')->send(new BookAdminEmail($order));
            // Mail::to('nguyenngocthien7742@gmail.com')->send(new BookClientEmail($order));
            

            $paymentMethod=$request->payment_method;
            if($paymentMethod === 'VNBANK'){
            $vnp_Url=$this->vnpayService->getVNPayUrl($order, 'VNBANK');

            return Redirect::to($vnp_Url);
        }   elseif($paymentMethod ==='INTCARD'){
            $vnp_Url = $this->vnpayService->getVNPayUrl($order,'INTCARD');
            return Redirect::to($vnp_Url);
        }

            return redirect()->route('home')->with('msg', 'Dat hang thanh cong');
        }catch(Exception $e){
            dd($e->getMessage());
            DB::rollBack();
            return redirect()->route('home')->with('msg', 'Dat hang that bai');
        }

    }
}


