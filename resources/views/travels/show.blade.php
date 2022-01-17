@extends('layouts.app')

@section('page-title', 'Travels')

@section('content')

    <div class="container">

        <h4>
            {{ $travel_package->name }}
        </h4>
        <p>
            Destination: {{ $travel_package->destination }}
        </p>
        <p>
            Travel date: {{ $travel_package->date }}
        </p>

    </div>

@endsection
