@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Forms</h3>
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
                        <a href="#">Forms</a>
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
                            <div class="card-title">Create Product</div>
                            <meta charset="UTF-8">
                                 <meta name="show" content="width=device-width, initial-scale=1.0">
                        </div>
                        <form action="{{ route('save-product') }}" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">Product Name</label>
                                                    <input type="text" class="form-control" id="name" name="product_name"
                                                        placeholder="Enter Product Name" required/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Product Category</label>
                                                    <select class="form-control" id="name" name="product_category" required>
                                                        <option value="">Select</option>
                                                        @foreach ($product_cat as $item)
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    {{-- <input type="text" class="form-control" id="name" name="product_category"
                                                        placeholder="Enter Product Category Name" /> --}}
                                                </div>
                                                <div class="form-group">
                                                    <label for="email2">Product Details</label>
                                                    <input type="text" class="form-control" id="email2" name="product_details"
                                                        placeholder="Enter Product Details"required />
                                                </div>
                                                <div class="form-group">
                                                    <label for="price">Product Price</label>
                                                    <input type="number" class="form-control" id="price" name="product_price"
                                                        placeholder="Enter Product Price" required/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="price">Product Image</label>
                                                    <input type="file" class="form-control" id="image" name="product_image" required/>
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
                            <li><a href="{{ route('show') }}">show</a></li>
                        </ul>
                    </nav> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
