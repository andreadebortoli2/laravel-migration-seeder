@extends('layouts.app')

@section('page-name', "today's trains")

@section('content')

    <div class="container pt-5">

        <ul class="list-unstyled">

            @foreach ($todayTrains as $train)
                @if (!$train->is_deleted)
                    <li>
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $train->company }} - {{ $train->train_id }}</h5>
                                        <div class="card-text train-logo">
                                            {{ '🚄' }}
                                        </div>
                                        <p class="card-text">
                                            <small class="text-muted">Number of vagons: {{ $train->vagons_number }}</small>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $train->departure_station }} -
                                            {{ $train->arrival_station }}
                                        </h5>
                                        <ul class="card-text list-unstyled">
                                            <li>Departure:
                                                {{ $train->departure_time }}</li>
                                            <li>Arrival:
                                                {{ $train->is_in_time ? $train->arrival_time : '???' }}</li>
                                        </ul>
                                        <p class="card-text">
                                            <small class="text-muted">
                                                @if (!$train->is_in_time && !$train->is_deleted)
                                                    The train will arrive a little late, sorry for the inconvenient
                                                @elseif ($train->is_in_time && !$train->is_deleted)
                                                    The train is in perfect time
                                                @endif
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>

@endsection
