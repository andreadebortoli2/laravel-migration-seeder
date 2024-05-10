@extends('layouts.app')

@section('page-name', "today's trains")

@section('content')

    <div class="container pt-5">

        @foreach ($todayTrains as $train)
            <ul class="list-unstyled">
                <li>
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $train->company }} - {{ $train->train_id }}</h5>
                                    <div class="card-text train-logo">
                                        {{ $train->is_deleted ? '🚫' : '🚄' }}
                                    </div>
                                    <p class="card-text">
                                        <small class="text-muted">{{ $train->vagons_number }}</small>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $train->departure_station }} - {{ $train->arrival_station }}
                                    </h5>
                                    <ul class="card-text list-unstyled">
                                        <li>Departure: {{ $train->departure_time }}</li>
                                        <li>Arrival: {{ $train->arrival_time }}</li>
                                    </ul>
                                    <p class="card-text">
                                        <small
                                            class="text-muted">{{ $train->is_in_time ? 'The train is in perfect time' : 'The train will arrive a little late, sorry for the inconvenient' }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        @endforeach
    </div>

@endsection
