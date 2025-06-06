@extends('users_end.layot.app')
@section('content')
<section id="home" class="p-0">
    <div id="jajaborCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active"
                style="background: url('https://www.racv.com.au/royalauto/transport/cars/classic-cars-investment/_jcr_content/root/container/articlepagecontent/image.coreimg.jpeg/1628674722803/hsv-gtsr-range-1600x600.jpeg') no-repeat center center / cover;">
                <div
                    class="d-flex align-items-center justify-content-center min-vh-100 text-white text-center flex-column overlay">
                    <div class="welcome-text">
                        <h2 class="display-6 fade-up">Welcome</h2>
                        <h3 class="h2 fade-up delay-1">To</h3>
                        <h1 class="display-3 fw-bold text-warning fade-up delay-2">JAJABOR</h1>
                        <p class="fst-italic fade-up delay-3">"Where every journey begins with the perfect ride"</p>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background: url('img/slide2.jpg') no-repeat center center / cover;">
                <div
                    class="d-flex align-items-center justify-content-center min-vh-100 text-white text-center flex-column overlay">
                    <div class="text w-75">
                        <h1 class="display-5 fade-up">Looking for <br><span class="text-warning">Rent a car or
                                bike?</span></h1>
                        <p class="lead fade-up delay-1">Choose from a wide range of well-maintained vehicles
                            tailored to your needs.</p>
                        <div class="app-images d-flex justify-content-center gap-3 fade-up delay-2">
                            <img src="{{ asset('assets') }}/users_end/img/ios.png" alt="iOS App" width="100">
                            <img src="{{ asset('assets') }}/users_end/img/512x512.png" alt="Android App"
                                width="100">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            {{-- <div class="carousel-item" style="background: url('img/slide3.jpg') no-repeat center center / cover;">
                <div
                    class="d-flex align-items-center justify-content-center min-vh-100 text-dark text-center flex-column overlay">
                    <div class="form-container w-50 bg-white bg-opacity-75 p-4 rounded-4 shadow fade-up">
                        <h2 class="mb-4">Book Your Ride</h2>
                        <form>
                            <div class="mb-3"><input type="search" class="form-control"
                                    placeholder="Search Places">
                            </div>
                            <div class="mb-3"><input type="date" class="form-control"></div>
                            <div class="mb-3"><input type="date" class="form-control"></div>
                            <input type="submit" value="Submit" class="btn btn-warning w-100">
                        </form>
                    </div>
                </div>
            </div> --}}

        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#jajaborCarousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#jajaborCarousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>


<section class="section_all bg-light" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title_all text-center">
                    <h3 class="font-weight-bold">Welcome To <span class="text-custom">Lorem Ipsum</span></h3>
                    <p class="section_subtitle mx-auto text-muted">Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry. <br />Lorem Ipsum has been the industry's standard dummy text.</p>
                    <div class="">
                        <i class=""></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row vertical_content_manage mt-5">
            <div class="col-lg-6">
                <div class="about_header_main mt-3">
                    <div class="about_icon_box">
                        <p class="text_custom font-weight-bold">Lorem Ipsum is simply dummy text</p>
                    </div>
                    <h4 class="about_heading text-capitalize font-weight-bold mt-4">Lorem Ipsum is simply dummy
                        text
                        of the printing industry.</h4>
                    <p class="text-muted mt-3">Contrary to popular belief, Lorem Ipsum is not simply random text.
                        It
                        has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
                        old.</p>

                    <p class="text-muted mt-3"> Richard McClintock, a Latin professor at Hampden-Sydney College in
                        Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum
                        passage.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="img_about mt-3">
                    <img src="https://img.sixt.com/1600/Fleet_BMW_X6_M-1_1.jpg" alt=""
                        class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-4">
                <div class="about_content_box_all mt-3">
                    <div class="about_detail text-center">
                        <div class="about_icon">
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                        <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Creative Design</h5>
                        <p class="edu_desc mt-3 mb-0 text-muted">Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="about_content_box_all mt-3">
                    <div class="about_detail text-center">
                        <div class="about_icon">
                            <i class="fab fa-angellist"></i>
                        </div>
                        <h5 class="text-dark text-capitalize mt-3 font-weight-bold">We make Best Result</h5>
                        <p class="edu_desc mb-0 mt-3 text-muted">Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="about_content_box_all mt-3">
                    <div class="about_detail text-center">
                        <div class="about_icon">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                        <h5 class="text-dark text-capitalize mt-3 font-weight-bold">best platform </h5>
                        <p class="edu_desc mb-0 mt-3 text-muted">Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services py-5 bg-light" id="services">
    <div class="container text-center">
        <div class="mb-5">
            <span class="text-uppercase text-primary fw-semibold">Our Services</span>
            <h2 class="fw-bold display-6 mt-2">What We Offer</h2>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card h-100 shadow-sm rounded-4 border-0 overflow-hidden hover-card">
                    <img src="https://aaa.scene7.com/is/image/acg/car-rentals:mobile?ts=1730892956189&bfc=on&network=on&dirt_feature=smart_imaging&dpr=off"
                        class="card-img-top" alt="Car Rental">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-2">Car Rental</h5>
                        <p class="text-muted">Perfect for trips, weddings, and business travel. Choose from a wide
                            range of luxury and economy cars.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm rounded-4 border-0 overflow-hidden hover-card">
                    <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=328,h=336,fit=crop,trim=0;336.53643724696354;0;336.53643724696354/mxB8LNgg7Wc8O77p/ladakh-bike-tour-package-banner-YNqNRgwog8uLrlX2.jpg"
                        class="card-img-top" alt="Bike Rental">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-2">Bike Rental</h5>
                        <p class="text-muted">Adventure bikes and scooters for city rides or thrilling journeys.
                            Affordable and flexible options available.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm rounded-4 border-0 overflow-hidden hover-card">
                    <img src="https://www.abestfashion.com/wp-content/uploads/2020/04/r1.jpg" class="card-img-top"
                        alt="Self Drive or Chauffeur">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-2">Self-Drive / Chauffeur</h5>
                        <p class="text-muted">Enjoy the freedom of self-driving or relax with our professional
                            chauffeur services. Your journey, your choice!</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<!--Ride Section-->
<section class="ride" id="ride">
    <div class="ride-overlay">
        <div class="heading text-center">
            <span>How It Works</span>
            <h1>Rent with 3 Easy Steps</h1>
        </div>
        <div class="ride-container2 container">
            <div class="row g-4">
                <div class="col-lg-4 box">
                    <i class='bx bxs-map'></i>
                    <h2>Choose a location</h2>
                    <p>Select the city or area where you want to rent a vehicle. Browse through available options
                        and pick the one that suits your needs.</p>
                </div>

                <div class="col-lg-4 box">
                    <i class='bx bxs-calendar'></i>
                    <h2>Pick-Up Date</h2>
                    <p>Choose your preferred rental start date and duration. Ensure availability and confirm your
                        booking for a hassle-free experience.</p>
                </div>

                <div class="col-lg-4 box">
                    <i class='bx bxs-car'></i>
                    <h2>Book A Vehicle</h2>
                    <p>Complete your reservation by providing necessary details and making a payment. Get ready to
                        hit the road with your chosen car or bike!</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="services-section py-5" id="services">
    <div class="container">

        <!-- Heading -->
        <div class="text-center mb-4">
            <h1 class="fw-bold display-5" id="section-heading">Explore Our Vehicles</h1>
            <p class="text-muted small">Browse and book your perfect ride today!</p>
        </div>

        <!-- Tabs and Search Row -->
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4 gap-2">

            <!-- Tabs -->
            <div class="btn-group">
                <button class="btn btn-sm btn-outline-primary active" id="car-btn"
                    onclick="showCategory('car')">Cars</button>
                <button class="btn btn-sm btn-outline-primary" id="bike-btn"
                    onclick="showCategory('bike')">Bikes</button>
            </div>

            <!-- Search and Filters -->
            {{-- <div class="d-flex align-items-center gap-2 flex-wrap">
                <input type="text" id="search-bar" class="form-control form-control-sm"
                    placeholder="Search..." onkeyup="searchVehicle()" style="width: 150px;">
                <select id="type-filter" class="form-select form-select-sm" onchange="filterVehicles()"
                    style="width: 100px;">
                    <option value="all">Type</option>
                    <option value="car">Car</option>
                    <option value="bike">Bike</option>
                </select>
                <select id="brand-filter" class="form-select form-select-sm" onchange="filterVehicles()"
                    style="width: 100px;">
                    <option value="all">Brand</option>
                    <option value="Mahindra">Mahindra</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Royal Enfield">Royal Enfield</option>
                    <option value="Yamaha">Yamaha</option>
                </select>
            </div> --}}

        </div>

        <!-- Vehicles Section -->
        <div id="vehicles-grid" class="row g-4">
            <!-- CAR 1 -->
            @foreach ($productsi as $pro)
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


            @foreach ($productsii as $pro)
            <div class="col-md-6 col-lg-3 vehicle-card bike" style="display:none;">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <img src="{{ asset($pro->image) }}" class="card-img-top"
                        alt="Royal Enfield">
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


<section id="top-location-section">
    <div class="text-center mb-4">
        <h1 class="fw-bold display-5" id="section-heading">Top Location</h1>
        <p class="text-muted small">Top Locations We Serve</p>
    </div>
    <div id="top-places">

        <div class="card">
            <div class="card__img">
                <img src="https://media.istockphoto.com/id/1972372069/photo/guwahati-assam-india-27-april-2022-top-view-of-the-kamakhya-mandir-temple-in-guwahati-assam.jpg?s=612x612&w=0&k=20&c=SfTc7SC_jNZ39p3yQmg0oiNxiPQmznFVmFxyLndL_Fo="
                    alt="Guwahati">
                <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>4.5</span>
                <div class="card__overlay">
                    <h3>Guwahati</h3>
                    <p>Gateway to Northeast India</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__img">
                <img src="https://images.wanderon.in/blogs/new/2022/12/tourist-places-in-shillong.jpg"
                    alt="Shillong">
                <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>5</span>
                <div class="card__overlay">
                    <h3>Shillong</h3>
                    <p>Scotland of the East</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__img">
                <img src="https://img.freepik.com/free-photo/indian-rhinoceros-asia-indian-rhino-one-horned-rhinoceros-unicornis-with-green-grass_475641-840.jpg"
                    alt="Kaziranga">
                <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>4.7</span>
                <div class="card__overlay">
                    <h3>Kaziranga</h3>
                    <p>Home of the Rhino</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__img">
                <img src="https://upload.wikimedia.org/wikipedia/commons/8/80/Agnigarh_Hill%2C_Tezpur.JPG"
                    alt="Tezpur">
                <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>4.3</span>
                <div class="card__overlay">
                    <h3>Tezpur</h3>
                    <p>City of Eternal Romance</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__img">
                <img src="https://majuliriverisland.wordpress.com/wp-content/uploads/2016/10/img_20171105_131129.jpg?w=800"
                    alt="Majuli">
                <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>4.8</span>
                <div class="card__overlay">
                    <h3>Majuli</h3>
                    <p>Cultural Capital of Assam</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__img">
                <img src="https://storage.justwravel.com/package/images/banner/detail_mobile/cropped/bike-and-backpacking-expedition-to-tawang-JustWravel-1707038689-Tawang-2.jpg.webp"
                    alt="Tawang">
                <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>5</span>
                <div class="card__overlay">
                    <h3>Tawang</h3>
                    <p>Arunachal's Hidden Gem</p>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="about" id="about">
    <div class="heading">
        <span>About Us</span>
        <h1>Best Customer Experience</h1>
    </div>
    <div class="about-container">
        <div class="about-img">
            <img src="{{ asset('assets') }}/users_end/img/about.png" alt="">
        </div>
        <div class="about-text">
            <span>About Us</span>
            <p>Welcome to JAJABOR, your trusted destination for hassle-free car and bike rentals. Whether you need a
                stylish car for a weekend getaway or a fuel-efficient bike for your daily commute, we've got you
                covered. Our platform offers a seamless booking experience, competitive pricing, and a diverse range
                of vehicles to suit your needs.

                At JAJABOR, we prioritize customer satisfaction, ensuring all our vehicles are well-maintained,
                clean, and ready for the road. With flexible rental plans and a dedicated support team, we make your
                journey smooth and enjoyable. Choose us for a reliable, affordable, and convenient rental
                experience!</p>
            <a href="#" class="btn">Learn More</a>
        </div>
    </div>
</section>
<!---Reviews-->
<section class="reviews" id="reviews">
    <div class="heading">
        <span>Reviews</span>
        <h1>Know What our Customer Say</h1>
    </div>
    <div class="reviews-container">
        <div class="box">
            <div class="rev-img">
                <img src="{{ asset('assets') }}/users_end/img/rev1.jpg" alt="">
            </div>
            <h2>Sam</h2>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bx-star'></i>
            </div>
            <p>"Had an amazing experience renting a bike for my weekend trip! The booking process was seamless, and
                the bike was in top-notch condition. Highly recommend!"</p>
        </div>


        <div class="box">
            <div class="rev-img">
                <img src="{{ asset('assets') }}/users_end/img/rev2.jpg" alt="">
            </div>
            <h2>Edward</h2>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bx-star'></i>
            </div>
            <p>"Great service and well-maintained cars! The rental rates were reasonable, and the support team was
                very responsive. Only wish the pick-up process was a bit faster."</p>
        </div>
        <div class="box">
            <div class="rev-img">
                <img src="{{ asset('assets') }}/users_end/img/rev3.jpg" alt="">
            </div>
            <h2>Suzen</h2>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
            </div>
            <p>Rented a car for a family vacation, and it was a smooth ride throughout. Hassle-free pickup and
                return process. Will definitely rent again!"</p>
        </div>
</section>
<!--Newsletter-->
<section class="newsletter">
    <h2>Subscribe To Newsletter</h2>
    <div class="box">
        <input type="text" placeholder="Enter Your Email...">
        <a href="#" class="btn">Subscribe</a>
    </div>
</section>
<div class="copyright">
    <p>&#169; CarpoolVenom All Right Reserved
    </p>
    <div class="social">
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-twitter'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
    </div>
</div>
<div id="booking-form" class="popup">
    <form>
        <h2>Book Your Ride</h2>
        <input type="text" placeholder="Your Name" required>
        <input type="email" placeholder="Your Email" required>
        <input type="date" required>
        <button type="submit">Confirm Booking</button>
    </form>
</div>
@endsection
