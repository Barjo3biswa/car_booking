@extends('users_end.layot.app')
@section('content')
    <section class="rent-form-section" id="rent-form">
        <div class="container">
            <div class="form-heading">
                <h2>Book Your Ride</h2>
                <p>Fill the form below to rent your preferred car or bike easily!</p>
            </div>

            <form class="rent-form" method="post" action="{{ route('booking',$id) }}">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                    </div>
                </div>

                {{-- <div class="form-row">
                    <div class="form-group">
                        <label for="vehicle">Vehicle Type</label>
                        <select id="vehicle" onchange="updateVehicleNames()" required>
                            <option value="">Select Vehicle</option>
                            <option value="car">Car</option>
                            <option value="bike">Bike</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="vehicle-name">Vehicle Name</label>
                        <select id="vehicle-name" required>
                            <option value="">Select Vehicle Name</option>
                        </select>
                    </div>
                </div> --}}

                <div class="form-row">
                    <div class="form-group">
                        <label for="location">Pickup Location</label>
                        <input type="text" id="location" name="location" placeholder="Enter pickup location" required>
                    </div>

                    <div class="form-group">
                        <label for="persons">Number of Persons</label>
                        <input type="number" id="persons" name="persons" placeholder="Enter number of persons" min="1"
                            max="10" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="pickup-date">Pickup Date</label>
                        <input type="date" id="pickup-date" name="pick_date" required>
                    </div>

                    <div class="form-group">
                        <label for="return-date">Return Date</label>
                        <input type="date" id="return-date" name="ret_date" required>
                    </div>
                </div>

                <div class="form-submit">
                    <button type="submit" class="btn-submit">Book Now</button>
                </div>
            </form>
        </div>
    </section>
@endsection
