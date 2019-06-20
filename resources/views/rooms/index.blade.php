@extends('layouts.app')

@section('content')
    <h1>Rooms</h1>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Room</th>
            <th scope="col">Type</th>
            <th scope="col">Status</th>
            <th scope="col">Condition</th>
            <th scope="col" style="width: 15%">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rooms as $room)
            <tr>
                <th scope="row">{{$room->name}}</th>
                <td>{{ $room->types()->first()->name  }}</td>
                <td></td>
                <td>
                    @if($room->maintenace)
                        <h4 class="badge badge-danger">under Maintenance</h4>
                    @else
                        <h4 class="badge badge-success">Excellent Condition</h4>
                    @endif
                </td>
                <td><a href="/rooms/{{$room->id}}" class="btn btn-secondary btn-sm">View Room</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $rooms->links() }}

@endsection