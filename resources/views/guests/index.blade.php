@extends('layouts.app')

@section('page-name', 'trains index')

@section('content')

    @foreach ($trains as $train)
        <div class="d-flex">
            <div>{{ $train->departure_station }} -</div>
            <div>{{ $train->arrival_station }} -</div>
            <div>{{ $train->departure_time }}</div>
        </div>
    @endforeach

@endsection
