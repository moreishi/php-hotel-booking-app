@extends('layouts.app')

@section('content')
    <h1>Room #{{$room->id}} Details</h1>
    <a href="/floors">< View Floors</a>


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        @if($room->maintenance)
                            <h3><span class="badge badge-secondary badge-danger">Under Maintenance</span></h3>
                        @else
                            <h3><span class="badge badge-secondary badge-success">Good Condition</span></h3>
                        @endif
                    </h5>
                    <p class="card-text">{{ $room->description }}</p>
                    @if($room->golf_view)
                    <p class="card-text"><h6><span class="badge badge-secondary">Golf View</span></h6></p>
                    @endif
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

@endsection