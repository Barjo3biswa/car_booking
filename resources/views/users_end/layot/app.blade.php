<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAJABOR</title>
    <link rel="stylesheet" href="{{ asset('assets') }}/users_end/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-primary fs-4" href="#">Jajabor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @php
                        use App\Models\productCatagory;

                        $product_category = productCatagory::get();
                    @endphp
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                    </li>
                    @foreach ($product_category as $cat)
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('sub-page',Crypt::encrypt($cat->id)) }}>{{ $cat->name }}</a>
                    </li>
                    @endforeach

                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="vehiclesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="vehiclesDropdown">
                            <li><a class="dropdown-item" href="{{ route('my-bookings') }}">My Bookings</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                    @endauth


                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @endguest



                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <div id="overlay"></div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollTrigger.min.js"></script>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ asset('assets') }}/users_end/script.js"></script>

    <script>
        $('#jajaborCarousel').on('slide.bs.carousel', function() {
            $('.carousel-item .text, .welcome-text, .form-container').fadeOut();
        });

        $('#jajaborCarousel').on('slid.bs.carousel', function() {
            $('.carousel-item.active .text, .carousel-item.active .welcome-text, .carousel-item.active .form-container')
                .fadeIn();
        });
    </script>

    <script>
        function animateSlideContent() {
            // Reset all
            gsap.set(".fade-up", {
                opacity: 0,
                y: 50
            });

            // Animate only visible slide
            const activeSlide = document.querySelector(".carousel-item.active");
            const elements = activeSlide.querySelectorAll(".fade-up");

            gsap.to(elements, {
                opacity: 1,
                y: 0,
                duration: 1,
                stagger: 0.2,
                ease: "power2.out"
            });
        }

        // Animate on initial load
        animateSlideContent();

        // Animate on slide change
        const carousel = document.querySelector('#jajaborCarousel');
        carousel.addEventListener('slid.bs.carousel', animateSlideContent);
    </script>





</body>

</html>
