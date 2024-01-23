@extends('admin.layout.master')
@section('title')
    Schedule Edit
@endsection
@section('content')

<div class="sb2-2">
    @if (session('msg'))
        <div class="alert alert-success" role="alert">
        {{ session('msg') }}
        </div>
    @endif
    <div class="sb2-2-2">
        <ul>
            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Edit Schedule</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-add-blog sb2-2-1">
        <h2>Edit Schedule " {{$scheduleCatProDetail->name}} "</h2>
        {{-- {{$errors ?? dd($errors->all())}} --}}
        <form role="form" method="POST" action="{{route('admin.schedule_category.update',['id'=> $scheduleCatProDetail->id])}}">
            <div class="row">
                <div class="input-field col s12">
                    <label for="name">Enter Schedule Name</label>
                    <input id="name" type="text" value="{{$scheduleCatProDetail->name}}" name="name" placeholder="Edit the name">
                    @error('name')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <label for="schedule">Schedule</label>
                    <input id="schedule" type="text" value="{{$scheduleCatProDetail->schedule}}" name="schedule" placeholder="Edit the schedule">
                    @error('schedule')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <label for="type">Type</label>
                    <input id="type" type="text" value="{{optional($scheduleCatProDetail->type)->type}}" name="type" placeholder="Giường nằm or Ghế ngồi">
                    @error('type')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <button type="submit" class="waves-effect waves-light btn-large">Update</button>
                </div>
            </div>
        </form>
        {{-- <div class="tab-inn">
            <div class="table-responsive table-desi tab-map">
                <iframe src="https://maps.google.com/maps?q=%C4%91%C3%A0%20l%E1%BA%A1t&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=&amp;output=embed" allowfullscreen></iframe>
            </div>
        </div> --}}
    </div>
</div>
</div>
</div>

@endsection