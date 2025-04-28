@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Bordered Table</div>
        </div>
        <div class="card-body">
            <div class="card-sub">
                <a href="{{route('catagory-product')}}" class="btn btn-primary">Add New Product</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $value)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $value->name}}</td>
                            <td><a href="{{ route('editcatagory', $value->id) }}">Edit</a></td>
                            <td><a href="{{ route('deletecatagory', $value->id) }}">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection