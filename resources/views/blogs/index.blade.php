@extends('layouts.app')

@section('page-title', 'Blog')

@section('content')

    <div class="container">

        <h1 class="my-5">
            Blog
        </h1>

        <section class="blogs row row-cols-3 gy-4">

            @forelse ($blogs as $blog)

                <div class="col">
                    <div class="card blog">
                        <div class="card-img">
                            <img src="{{ $blog->image }}" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h3>
                                {{ $blog->title }}
                            </h3>
                            <h5>
                                {{ $blog->sub_title }}
                            </h5>
                            <p>
                                {{ $blog->post_text }}
                            </p>
                            <small>
                                {{ $blog->author }}
                            </small>
                            <br>
                            <a href="{{ route('blog', ['blog' => $blog->id]) }}">Read</a>
                        </div>
                    </div>
                </div>

            @empty
                <p>
                    Nothing to see here!!
                </p>

            @endforelse

        </section>


    </div>

@endsection
