@extends('layouts.app')

@section('content')


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">The Travelerz&copy;</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Travels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About us</a>
                    </li>
                </ul>
                <form class="form-inline d-flex my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
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
                </div>

            @endforeach
        </div>


    </div>

@endsection
