@extends('admin.layout.master')
@section('title')
    Schedule Create
@endsection
@section('content')

<div class="sb2-2">

    <div class="sb2-2-2">
        <ul>
            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Add New Package Categories</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-add-blog sb2-2-1">
        <h2>Add New Schedule</h2>
        {{-- {{$errors ?? dd($errors->all())}} --}}
        <form role="form" method="POST" action={{route('admin.schedule_category.store')}}>
            <div class="row">
                <div class="input-field col s12">
                    <label for="name">Enter Schedule Name</label>
                    <input id="name" type="text" value="{{old('name')}}" name="name" placeholder="">
                    @error('name')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <label for="type">Type</label>
                    <input id="type" type="text" value="{{old('type')}}" name="type" placeholder="">
                    @error('type')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <label for="schedule">Schedule</label>
                    <input id="schedule" type="text" value="{{old('schedule')}}" name="schedule" placeholder="">
                    @error('schedule')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <button type="submit" class="waves-effect waves-light btn-large">Submit</button>
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