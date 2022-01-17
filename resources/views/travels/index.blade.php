@extends('layouts.app')

@section('page-title', 'Travels')

@section('content')

    <div class="container">
        <h1 class="my-5">
            Travels
        </h1>

        <div class="row g-4 mb-5">
            @foreach ($travel_packages as $travel_package)

                <div class="card col-6 text-center py-4">
                    <h4>
                        {{ $travel_package->name }}
                    </h4>
                    <p>
                        {{ $travel_package->destination }}
                    </p>
                    <p>
                        {{ $travel_package->date }}
                    </p>

                    <a name="" id="" class="btn btn-primary w-25 m-auto" href="#" role="button">
                        Discover
                    </a>

                </div>

            @endforeach
        </div>


    </div>

@endsection
