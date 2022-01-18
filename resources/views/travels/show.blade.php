@extends('layouts.app')

@section('page-title', 'Travels')

@section('content')

    <div class="container">

        <h4>
            {{ $travel->name }}
        </h4>
        <p>
            Destination: {{ $travel->destination }}
        </p>
        <p>
            Travel date: {{ $travel->date }}
        </p>

    </div>

@endsection
