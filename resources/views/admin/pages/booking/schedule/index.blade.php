@extends('admin.layout.master')
@section('title')
    Schedule List
@endsection
@section('content')
<style>
    .custom-button {
        background-color: none;
        border: none;
        padding: 0;
        cursor: pointer;
    }

    .custom-button i {
        color: red;
    }

    .custom-button2 {
        padding: 2px;
        font-size: 10px;
        margin:0px;
    }

</style>

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
            <li class="active-bre"><a href="#"> Schedule List</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-1">
        <div class="inn-title">
            <h4>Schedule of tour</h4>
            <p>This is the schedule of the tour</p>
        </div>
        <div class="bor">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Schedule</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Deleted At</th>
                        <th>Command</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($scheduleCatPro as $index=>$scheduleCatPro)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $scheduleCatPro->name }}</td>
                            <td>{{ $scheduleCatPro->schedule }}</td>
                            <td>{{ $scheduleCatPro->created_at }}</td>
                            <td>{{ $scheduleCatPro->updated_at }}</td>
                            <td>{{ $scheduleCatPro->deleted_at }}</td>
                            <td>
                                <form action="{{ route('admin.schedule_category.destroy', ['id' => $scheduleCatPro->id]) }}" method="post">
                                    @csrf
                                    <a href="{{ route('admin.schedule_category.detail', ['id' => $scheduleCatPro->id]) }}" class="sb2-2-1-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <button onclick="return confirm('Are you sure ?');" type="submit" class="custom-button">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>
                                </form>
                                
                                @if($scheduleCatPro->trashed())
                                    <form action="{{ route('admin.schedule_category.restore', ['id' => $scheduleCatPro->id]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success custom-button2">Restore</button>
                                    </form>
                                    <form action="{{ route('admin.schedule_category.force.delete', ['id' => $scheduleCatPro->id]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-warning custom-button2">Force Delete</button>
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


@endsection
