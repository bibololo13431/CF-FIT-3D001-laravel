@extends('admin.layout.master')
@section('title')
    Tour List
@endsection
@section('content')
<div class="sb2-2">
    
    <div class="sb2-2-2">
        <ul>
            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Ui Form</a>
            </li>
        </ul>
    </div>
    @if (session('msg'))
        <div class="alert alert-success" role="alert">
            {{ session('msg') }}
        </div>
    @endif
    
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>All package</h4>
                        <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                        <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                        <ul id="dr-users" class="dropdown-content">
                            <li><a href="{{ route('admin.tour.create') }}">Add New</a>
                            </li>
                        </ul>

                        <!-- Dropdown Structure -->

                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>SeatQty</th>
                                        <th>Price</th>
                                        <th>Schedule</th>
                                        <th>Type</th>
                                        <th>Created_at</th>
                                        <th>Deleted_at</th>
                                        <th>Action Bar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    @forelse ($tour as $index => $tour )
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $tour->name }}</td>
                                        <td>{{ $tour->date }}</td>
                                        <td>{{ $tour->status }}</td>
                                        <td>{{ $tour->seatqty }}</td>
                                        <td>{{ $tour->price }}</td>
                                        <td>{{ optional($tour->scheduleCatPro)->schedule }}</td>
                                        <td>{{ optional($tour->type)->type }}</td>
                                        <td>{{ $tour->created_at }}</td>
                                        <td>{{ $tour->scheduleCatPro->deleted_at }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('admin.tour.edit', ['tour' => $tour->id]) }}">Detail</a>
                                            <form action="{{ route('admin.tour.destroy', ['tour' => $tour->id]) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button onclick="return confirm('Are you sure ?');" type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                          @if($tour->trashed())
                                          <form action="{{route('admin.tour.restore', ['id' => $tour->id])}}" method="POST">
                                            @csrf
                                          <button type = "submit" class="btn btn-success">Restore</button>
                                          </form>
                  
                                          <form action="{{route('admin.tour.force.delete', ['id' => $tour->id])}}" method="POST">
                                            @csrf
                                          <button type = "submit" class="btn btn-warning">Force Delete</button>
                                          </form>
                  
                                          @endif
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