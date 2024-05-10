@extends('layouts.app')

@section('page-name', 'trains index')

@section('content')

    <div class="container pt-5">

        @foreach ($trains as $train)
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
                                        <small class="text-muted">Number of vagons: {{ $train->vagons_number }}</small>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $train->departure_station }} - {{ $train->arrival_station }}
                                    </h5>
                                    <ul class="card-text list-unstyled">
                                        <li class="{{ $train->is_deleted ? 'text-muted' : '' }}">Departure:
                                            {{ $train->departure_time }}</li>
                                        <li class="{{ $train->is_deleted ? 'text-muted' : '' }}">
                                            Arrival:
                                            @if ($train->is_deleted)
                                            @elseif (!$train->is_in_time && !$train->is_deleted)
                                                ???
                                            @elseif ($train->is_in_time && !$train->is_deleted)
                                                {{ $train->arrival_time }}
                                            @endif
                                        </li>
                                    </ul>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            @if ($train->is_deleted)
                                            @elseif (!$train->is_in_time && !$train->is_deleted)
                                                The train will arrive a little late, sorry for the inconvenient
                                            @elseif ($train->is_in_time && !$train->is_deleted)
                                                @if ($train->arrival_time < now())
                                                    The train was in perfect time
                                                @else
                                                    The train is in perfect time
                                                @endif
                                            @endif
                                        </small>
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
