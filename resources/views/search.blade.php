@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Book Now!</h1>

        <a href="/home">< Home</a>

        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('home-search') }}" method="GET">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="start_date">Start Date</label>
                                <input type="date" class="form-control" id="start_date" name="start_date"
                                       value="{{$start_min_date}}"
                                       min="{{$start_min_date}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="end_date">End Date</label>
                                <input type="date" class="form-control" id="end_date" name="end_date"
                                       value="{{$end_min_date}}"
                                       min="{{$end_min_date}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="room_type">Room Type</label>
                        <select class="form-control" id="room_type" name="room_type">
                            @foreach($room_types as $rt)
                                <option value="{{$rt->id}}">{{ucfirst($rt->name)}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="room_type">Floor</label>
                        <select class="form-control" id="room_type" name="floor">

                            @foreach($floors as $floor)
                                <option value="{{$floor->id}}">{{$floor->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Check Available Rooms</button>
                </form>
            </div>
        </div>

        <h1 class="mt-5">Result</h1>

        @foreach($query as $room)
            <div class="card mb-2">
                <h5 class="card-header">{{$room->name}}</h5>
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
                    <a href="/bookings/create?&room_id={{$room->id}}&start_date={{Request::input('start_date')}}&end_date={{Request::input('end_date')}}" class="btn btn-primary">Book This Room</a>
                </div>
            </div>
        @endforeach

        {{ $query->appends(request()->query())->links() }}

    </div>
@endsection
