@extends('users_end.layot.app')
@section('content')
    <section class="rent-form-section" id="rent-form">
        <div class="container">
            <table class="table table-border">
                <thead>
                    <tr>
                        <th>Pickup Date</th>
                        <th>Return Date</th>
                        <th>Pickup Location</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $book)
                    <tr>
                        <td>{{$book->pick_date}}</td>
                        <td>{{$book->ret_date}}</td>
                        <td>{{$book->pickup_location}}</td>
                        <td>{{$book->status}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
