@extends('layouts.app')

@section('content')
    <h1>Floors</h1>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Floor</th>
            <th scope="col" style="width: 15%">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($floors as $floor)
        <tr>
            <th scope="row">{{$floor->name}}</th>
            <td><a href="/floor/{{$floor->id}}/rooms" class="btn btn-secondary btn-sm">View Rooms</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {{ $floors->links() }}

@endsection