@extends('layouts.app')

@section('content')
    <h1>Booking Now</h1>

    <div class="row">
        <div class="col-md-6 mt-3">

            <h3>Customer Details</h3>

            <form>
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city">
                </div>
                <div class="form-group">
                    <label for="postcode">Postcode</label>
                    <input type="text" class="form-control" id="postcode">
                </div>
                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" class="form-control" id="state">
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
        <div class="col-md-6">

            <div class="card mb-2">
                <h5 class="card-header">Room #{{$room->name}}</h5>
                <div class="card-body">
                    @if($room->maintenance)
                        <h3><span class="badge badge-secondary badge-danger">Under Maintenance</span></h3>
                    @else
                        <h3><span class="badge badge-secondary badge-success">Good Condition</span></h3>
                    @endif
                    <p class="card-text">{{$room->types()->first()->description}}</p>
                    <p class="card-text">{{ $room->description }}</p>
                    @if($room->golf_view)
                        <p class="card-text"><h6><span class="badge badge-secondary">Golf View</span></h6></p>
                    @endif
                </div>
            </div>

        </div>
    </div>

@endsection