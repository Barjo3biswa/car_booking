@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Bordered Table</div>
        </div>
        <div class="card-body">
            <div class="card-sub">
                <a href="{{route('create-sales-product')}}" class="btn btn-primary">Add New Product</a>
            </div>
            {{-- <div class="card-sub">
                Add
                <code class="highlighter-rouge">.table-bordered</code> to
                create a bordered table
            </div> --}}
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Product Name</th>
                        <th>Product Quantity</th>
                        <th>In Rent</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $value)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $value->product_name }}</td>
                            <td>{{ $value->available_product }}</td>
                            <td>{{ $value->on_rent }}</td>
                            {{-- <td><a href="{{ route('editsales', $value->id) }}">Edit</a></td>
                            <td><a href="{{ route('deletesales', $value->id) }}">Delete</a></td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
