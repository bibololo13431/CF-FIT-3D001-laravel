@extends('admin.layout.master')
@section('title')
    Tour Create
@endsection
@section('content')

<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Add New Tour</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-add-blog sb2-2-1">
        <h2>Add New Tour</h2>
        {{-- {{$errors ?? dd($errors->all())}} --}}
        <form role="form" method="POST" action={{route('admin.tour.store')}} enctype="multipart/form-data">
            <div class="row">
                <div class="input-field col s12">
                    <label for="name">Enter Tour Name</label>
                    <input id="name" type="text" value="{{old('name')}}" name="name" placeholder="">
                    @error('name')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image_url">Image</label>
                    <input type="file" name="image_url" class="form-control" id="image_url">
                      @error('image_url')
                        <span style="color: red">{{ $message }}</span>
                      @enderror
                  </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <div for="description">Description</div>
                    <textarea id="description" name="description" placeholder=""></textarea>
                    @error('description')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <div for="date">Date</div>
                    <input id="date" type="date" value="{{old('date')}}" name="date">
                    @error('date')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <div for="time">Time</div>
                    <input id="time" type="time" value="{{old('time')}}" name="time">
                    @error('time')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <label for="seatqty">Seat Qty</label>
                    <input id="seatqty" type="text" value="{{old('seatqty')}}" name="seatqty" placeholder="">
                    @error('seatqty')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <label for="price">Price</label>
                    <input id="price" type="text" value="{{old('price')}}" name="price" placeholder="">
                    @error('price')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
            </div>        
            <div class="row">
                <div class="input-field col s12">
                    <select class="status" name="status" id="status">
                        <option value="" disabled selected>Choose Status of Tour</option>
                        <option {{old('status' == '0'?'selected': '')}}value="0">Sold Out</option>
                        <option {{old('status' == '1'?'selected': '')}}value="1" >Available</option>
                    </select>
                    <label for="status">Select Status</label>
                    @error('status')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <select class="schedule_cat_pro_id" name="schedule_cat_pro_id" id="schedule_cat_pro_id">
                        <option value="" disabled selected>Choose Schedule</option>
                        @foreach ($scheduleCatPro as $scheduleCatProDetail )
                        <option {{old('schedule_cat_pro_id') == $scheduleCatProDetail->id ? 'selected':''}}value="{{$scheduleCatProDetail -> id}}">{{$scheduleCatProDetail->schedule}}</option> 
                        @endforeach
                    </select>
                    <label for="schedule_cat_pro_id">Select Schedule</label>
                    @error('schedule_cat_pro_id')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <select class="type_id" name="type_id" id="type_id">
                        <option value="" disabled selected>Choose Type</option>
                        @foreach ($type as $type )
                        <option {{old('type_id') == $type->id ? 'selected':''}}value="{{$type -> id}}">{{$type->type}}</option> 
                        @endforeach
                    </select>
                    <label for="type_id">Select Type</label>
                    @error('type_id')
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
    </div>
</div>
</div>
</div>

@endsection
@section('js-custom')
<script type="text/javascript">
    $(document).ready(function(){
    ClassicEditor
      .create( document.querySelector('#description'),{
        ckfinder:{
          uploadUrl:'{{route('admin.tour.image.upload').'?_token='.csrf_token()}}',
        }
      })
      .catch( error => {
        console.error(error);
      })
      
  });
</script>
@endsection