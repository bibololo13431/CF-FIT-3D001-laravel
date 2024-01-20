<?php

namespace App\Http\Controllers\Admin;

use App\Events\TourCreate;
use App\Events\TourEdit;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TourRequest;
use App\Models\ScheduleCatPro;
use App\Models\Tour;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TourController extends Controller
{
    public function index() {
        $tour = Tour::with('scheduleCatPro', 'type')->withTrashed()->get();
        return view('admin.pages.booking.tour.index')->with('tour',$tour);
    }

    

    public function uploadImage(Request $request){
        if ($request->hasFile('upload')){
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);

            $extension = $request -> file('upload')->getClientOriginalExtension();
            $fileName=$fileName . '_' . time() . '.'.$extension;
            $request->file('upload')->move(public_path('images'), $fileName);

            $url = asset('images/'.$fileName);
            return response()->json(['fileName'=>$fileName, 'uploaded' =>1, 'url'=>$url]);
        }
    }

    public function create() {
        $scheduleCatPro = ScheduleCatPro::all();
        $type = Type::all();
        return view('admin.pages.booking.tour.create') ->with('scheduleCatPro', $scheduleCatPro) ->with('type', $type);
    }

    public function store(TourRequest $request) {
        $fileName = null;
        $fileName = $this ->storeImage($request);
        $arrayData = $request->except('_token','image_url');
        $arrayData['image_url'] = $fileName;
        $eventTour=Tour::create($arrayData);
        $eventTour->update(['actualseat' => $eventTour->seatqty]);
        event(new TourCreate($eventTour));
        return redirect()->route('admin.tour.index')->with('msg','Them san pham thanh cong');
    }
    private function storeImage(Request $request): ?string{
        $fileName = null;
        if ($request->hasFile('image_url')){
            $originName = $request->file('image_url')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);

            $extension = $request -> file('image_url')->getClientOriginalExtension();
            $fileName=$fileName . '_' . time() . '.'.$extension;
            $request->file('image_url')->move(public_path('images'), $fileName);
        }
        return $fileName;
    }

    public function edit(Tour $tour)
    {
        $scheduleCatPro = ScheduleCatPro::all();
        $type = Type::all();
        return view('admin.pages.booking.tour.detail')
        ->with('tour',$tour)
        ->with('scheduleCatPro', $scheduleCatPro)
        ->with('type', $type);
    }

    public function update(TourRequest $request, string $id) {
        $tour = Tour::find($id);
        $oldSeatqty = $tour -> seatqty;
        $newSeatqty = $request -> seatqty;

        if ($oldSeatqty != $newSeatqty){
            event(new TourEdit($tour, $newSeatqty));
        }
        $oldImage = $tour ->image_url;
        $arrayData = $request->except('__token', '_method', 'image_url');
        $fileName = $this->storeImage($request);
        if(!is_null($fileName)){
            $arrayData['image_url']= $fileName;
            if(!is_null($oldImage)){
                unlink(public_path('images')."/".$oldImage);
            }
        }
        $tour->update($arrayData);
        
        return redirect()->route('admin.tour.index')->with('msg','Tour da duoc sua doi');
    }

    public function destroy(string $id){
        $tour = Tour::find($id)->delete();
        return redirect()->route('admin.tour.index')->with('msg','Tour has been remove');
    }

    public function restore($id){
        $tour = Tour::withTrashed()->find($id);
        $tour -> restore();
        return redirect()->route('admin.tour.index')->with('msg','Tour has been restore');
    }

    public function forceDelete($id){
        $tour = Tour::withTrashed()->find($id);
        $tour -> forceDelete();
        return Redirect()->route('admin.tour.index')->with('msg', 'Tour has been romove from database');
    }
}
