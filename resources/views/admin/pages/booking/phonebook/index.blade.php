@extends('admin.layout.master')
@section('title')
    Phone Book
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
            <li><a href="{{ route('admin.pages.dashboard') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="{{ route('admin.phonebook.index') }}"> Phone book</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Phone Book Order</h4>
                        <p>Order which order by Customer</p>
                    

                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Tour</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Time</th>
                                        <th>SeatDetail</th>
                                        <th>Confirm</th>
                                        <th>Cancel</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($phoneBooks as $index => $phoneBook)                                                                                            
                                    <tr>
                                        {{-- <td><span class="list-img">
                                            <img src="{{ asset('images/' . $phoneBook->tour->image_url) }}" alt="" style="width: 50px; height: 50px;">
                                        </span>
                                        </td> --}}
                                        <td><a href="#"><span class="list-enq-name">{{optional($phoneBook->tour)->name}}</span></a>
                                        </td>
                                        <td>{{$phoneBook->name}}</td>
                                        <td>{{$phoneBook->phone}}</td>
                                        <td>{{$phoneBook->email}}</td>
                                        <td><a href="#">
                                            <span class="list-enq-name">
                                                {{optional($phoneBook->tour)->date}}
                                                {{ optional($phoneBook->tour)->time ? '' . optional($phoneBook->tour)->time : '' }}
                                            </span></a>
                                        <td>{{ $phoneBook->seatdetail}}</td>
                                        <td>
                                            <form action="{{ route('admin.phonebook.confirm', ['id' => $phoneBook->id]) }}" method="post">
                                                @csrf
                                                <button type="submit" aria-hidden="true"><i class="fa-regular fa-square-check"></i>Confirm</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.phonebook.cancel', ['id' => $phoneBook->id]) }}" method="post">
                                                @csrf
                                                <button type="submit" aria-hidden="true"><i class="fa-solid fa-ban"></i></i>Cancel</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                    <td colspan="4">No data</td>
                                  </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



















@endsection