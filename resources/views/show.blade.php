@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Bordered Table</div>
        </div>
        <div class="card-body">
            <div class="card-sub">
                <a href="{{route('create-product')}}" class="btn btn-primary">Add New Product</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Product_Name</th>
                        <th>Product_Category</th>
                        <th>Product_Details</th>
                        <th>Product_Price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $value)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $value->product_name }}</td>
                            <td>{{ $value->product_category }}</td>
                            <td>{{ $value->product_description }}</td>
                            <td>{{ $value->price }}</td>
                            <td><a href="{{ route('edit', $value->id) }}">Edit</a></td>
                            <td><a href="{{ route('delete', $value->id) }}">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
