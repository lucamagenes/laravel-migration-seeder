@extends('layouts.app')

@section('page-title', 'Blog')

@section('content')

    <div class="container">

        <section class="blog">

            <img src="{{ $blog->image }}" class="img-fluid">

            <h3>
                {{ $blog->title }}
            </h3>
            <small>
                {{ $blog->published }}
            </small>
            <h5>
                {{ $blog->sub_title }}
            </h5>
            <p>
                {{ $blog->post_text }}
            </p>
            <small>
                {{ $blog->author }}
            </small>

        </section>
    </div>

@endsection
