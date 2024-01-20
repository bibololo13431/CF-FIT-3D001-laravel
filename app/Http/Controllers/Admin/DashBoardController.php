<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashBoardController extends Controller
{
    public function index(){
        //SELECT status, count(status) as number FROM `order` GROUP BY status;
        $datas = DB::table('order')
        ->selectRaw('status, count(*) as number')
        ->groupBy('status')
        ->get();

        $result = [];
        $result[] = ['Status', 'Number'];
        foreach($datas as $data){
            $result[] = [ucfirst($data->status), $data->number];
        }
        $dataOrderNumber = DB::table('order')
        ->selectRaw("DATE(created_at) as date, count(*) as number")
        ->groupBy('date')
        ->get();

        $resultOrderNumber = [];
        $resultOrderNumber[] = ['Date', 'Number'];
        foreach($dataOrderNumber as $data){
            $resultOrderNumber[] = [$data->date, $data->number];
        }

        return view('admin.pages.dashboard')
        ->with('result', $result)
        ->with('resultOrderNumber', $resultOrderNumber);
    }
}
