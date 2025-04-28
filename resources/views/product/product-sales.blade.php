@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Product Sales Forms</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="#">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Sales Forms</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Basic Form</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Sales Product</div>
                            <meta charset="UTF-8">
                                 <meta name="show" content="width=device-width, initial-scale=1.0">
                        </div>
                        <form action="{{ route('save-sales-product') }}" method="post">
                                <div class="card-body">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12">
                                                {{-- <div class="form-group">
                                                    <label for="number">Product Id</label>
                                                    <input type="number" class="form-control" id="id" name="product_id"
                                                        placeholder="Enter Product ID" />
                                                </div> --}}
                                                <div class="form-group">
                                                    <label for="name">Product Name</label>
                                                    <select class="form-control" id="product_id" name="product_id">
                                                        <option value="">--select product</option>
                                                        @foreach($product as $pro)
                                                        <option value="{{$pro->id}}">{{$pro->product_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="number">product_Quantity</label>
                                                    <input type="number" class="form-control" id="number" name="product_quantity"
                                                        placeholder="Enter Product Quantity" />
                                                </div>
                                            </div>
                                        </div>
                                
                                </div>
                                <div class="card-action">
                                    <input type="submit" class="btn btn-success" value="Save">
                                    {{-- <button type="submit" class="btn btn-success">Submit</button> --}}
                                    <button class="btn btn-danger">Cancel</button>
                                </div>
                            </form>
                    </form>
                    {{-- <nav>
                        <ul>
                            <li><a href="{{ route('View') }}">View</a></li>
                        </ul>
                    </nav> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
