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
                        <a href="#">Update Catagory Forms</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Update Catagory Product</div>
                            <meta charset="UTF-8">
                                 <meta name="showcatagory" content="width=device-width, initial-scale=1.0">
                        </div>
                        <form action="{{ route('updatecatagory',$id) }}" method="post">
                                <div class="card-body">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">Category Name</label>
                                                    <input type="text" class="form-control" id="name" name="catagory_name" value="{{ $data->catagory_name }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="card-action">
                                    <input type="submit" class="btn btn-success" value="Save">
                                    {{-- <button type="submit" class="btn btn-success">Submit</button> --}}
                                </div>
                            </form>
                    </form>
                    <nav>
                        {{-- <ul>
                            <li><a href="{{ route('showcatagory') }}">Show Catagory Update Data</a></li>
                        </ul> --}}
                    </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection