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
            About Us
        </h1>

        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, cum architecto incidunt saepe beatae numquam
            possimus atque error ipsum sed maxime corporis nisi, rerum pariatur, velit id delectus ipsam corrupti!
        </p>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, cum architecto incidunt saepe beatae numquam
            possimus atque error ipsum sed maxime corporis nisi, rerum pariatur, velit id delectus ipsam corrupti!
        </p>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa laboriosam iusto soluta quis id omnis, alias
            corporis dolorem quos cupiditate ut? Numquam maxime repellat nulla reprehenderit nostrum architecto facilis,
            esse reiciendis quisquam aperiam! Dolorem pariatur tempora perferendis esse dolorum eveniet possimus ab quo,
            nobis natus consequatur soluta ullam tempore vero.
        </p>
    </div>

@endsection
