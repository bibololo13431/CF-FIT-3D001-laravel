<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ScheduleCatProRequest;
use App\Models\ScheduleCatPro;
use App\Models\Type;
use Illuminate\Http\Request;

class ScheduleCatProController extends Controller
{


    public function index(Request $request){
        $scheduleCatPro = ScheduleCatPro::withTrashed()->with('type')->get();
        $type = Type::withTrashed()->get();
        return view('admin.pages.booking.schedule.index', compact('scheduleCatPro', 'type'));
    }
    public function create(){
        return view('admin.pages.booking.schedule.create');
    }

    public function store(ScheduleCatProRequest $request){
        $schedule = $request->only(['name', 'schedule']);
        $typeRequest = $request->only(['type']);
        $checkType = Type::WHERE('type', $typeRequest['type'])->first();

        if($checkType){
            $type = $checkType;
        } else {
            $newType = Type::create($typeRequest);
            $type = $newType;
        }
        ScheduleCatPro::create(array_merge($schedule, ['type_id' => $type->id]));
        return redirect()->route('admin.schedule_category')->with('msg','Them Schedule thanh cong');
    }

    public function detail($id) {
        $scheduleCatProDetail = ScheduleCatPro::findOrFail($id);
        return view('admin.pages.booking.schedule.detail') 
        -> with('scheduleCatProDetail', $scheduleCatProDetail)
        ;
    }

    public function update(ScheduleCatProRequest $request, $id) {
        $typeRequest = $request->only(['type']);
        $checkType = Type::WHERE('type', $typeRequest['type'])->first();
        if($checkType){
            $checkType->update([
                'type' => $typeRequest['type'],
            ]);
            $type = $checkType;
        } else {
            $newType = Type::create($typeRequest);
            $type = $newType;
        }
        $scheduleCatProDetail = ScheduleCatPro::find($id);
        $scheduleCatProDetail->update([
            'name' => $request ->name,
            'schedule'=>$request ->schedule,
            'type_id'=> $type->id,
        ]);
        return redirect() -> route('admin.schedule_category')->with('msg','Update thành công');
    }


    public function destroy(Request $request, $id) {
        $check = ScheduleCatPro::where('id', '=', $id)->delete();
        $msg = ($check) ? 'Success Delete' : 'Failed Delete';
        return redirect()->route('admin.schedule_category')->with('msg', $msg);
    }

    public function restore($id) {
        $schedulecategory = ScheduleCatPro::withTrashed() -> find($id);
        $schedulecategory -> restore();
        return redirect() -> route('admin.schedule_category') -> with('msg', 'Restore success');
    }

    public function forceDelete($id){
        $schedulecategory= ScheduleCatPro::withTrashed()->find($id);
        $schedulecategory->forceDelete();
        return redirect()->route('admin.schedule_category')->with('msg', 'Success Delete');
    }
}
