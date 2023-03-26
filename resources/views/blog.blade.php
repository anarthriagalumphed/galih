{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')
    @foreach ($post as $post)
        <article class="mb-5">
            <h2>
                <a href="/blog/{{ $post['slug'] }}">{{ $post['title'] }}</a>
            </h2>
            <h5>By: {{ $post['author'] }}</h5>
            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach
@endsection
