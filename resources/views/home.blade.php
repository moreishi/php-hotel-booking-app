@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Book Now!</h1>

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
</div>
@endsection
