@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Orders</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>name</th>
                        <th>phone</th>
                        <th>pickup location</th>
                        <th>from date</th>
                        <th>to date</th>
                        <th>no of persons</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $key => $value)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $value->full_name }}</td>
                            <td>{{ $value->phone_no }}</td>
                            <td>{{ $value->pickup_location }}</td>
                            <td>{{ $value->pick_date }}</td>
                            <td>{{ $value->ret_date }}</td>
                            <td>{{ $value->no_of_per }}</td>
                            <td>{{ $value->status }}</td>
                            <td>
                                @if($status == 'new')
                                    <a href="{{ route('admin-confirm',['id'=>Crypt::encrypt($value->id),'status'=>'Confirmed']) }}" class="btn btn-primary btn-xs">Confirm</a>
                                @endif
                                @if($status == 'new' || $status == 'confirmed')
                                <a href="{{ route('admin-confirm',['id'=>Crypt::encrypt($value->id),'status'=>'Rejected']) }}" class="btn btn-danger btn-xs">Reject</a>
                                @endif
                                @if($status == 'confirmed')
                                <a href="{{ route('admin-confirm',['id'=>Crypt::encrypt($value->id),'status'=>'Delevered']) }}" class="btn btn-success btn-xs">Delevered</a>
                                @endif

                                @if($status == 'Delevered')
                                <a href="{{ route('admin-confirm',['id'=>Crypt::encrypt($value->id),'status'=>'completed']) }}" class="btn btn-success btn-xs">Completed</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
