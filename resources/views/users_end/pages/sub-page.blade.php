@extends('users_end.layot.app')
@section('content')

<section class="services-section py-5" id="services">
    <div class="container">

        <!-- Heading -->
        {{-- <div class="text-center mb-4">
            <h1 class="fw-bold display-5" id="section-heading">Explore Our Vehicles</h1>
            <p class="text-muted small">Browse and book your perfect ride today!</p>
        </div> --}}


        <div id="vehicles-grid" class="row g-4">
            <!-- CAR 1 -->
            @foreach ($products as $pro)
            <div class="col-md-6 col-lg-3 vehicle-card car">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <img src="{{ asset($pro->image) }}"
                        class="card-img-top" alt="Mahindra Scorpio">
                    <div class="card-body">
                        <h5 class="card-title">{{$pro->product_name}}</h5>
                        <p class="card-text small text-muted">{{$pro->product_description}}</p>
                        <h6 class="fw-bold">{{ $pro->price }}<span class="text-muted">/day</span></h6>
                        <div class="d-grid mt-2">
                            <a href="{{ route('rent-now',Crypt::encrypt($pro->id)) }}" class="btn btn-primary btn-sm">Rent Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



        </div>

    </div>
</section>
@endsection
