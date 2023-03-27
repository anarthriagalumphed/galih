{{-- @dd($post); --}}


@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>
    {{-- <h5>{{ $post['author'] }}</h5> --}}
    {{-- {{ $post->body }} --}}


    {{-- perintah ini digunakan jika didalam 
    data ada tag html dan kita mau memakainya --}}
    {!! $post->body !!}

    <a href="/blog">back</a>
@endsection




{{-- code dibawah ini dipakai untuk menambah data secara masa --}}


{{-- use App\Models\Post;

Post::create([
    'title' => 'Ketiga',
    'slug' => 'ketiga',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In nisi dicta delectus officia, nemo corporis maxime quas ea ipsam sapiente praesentium at natus repellat repudiandae sequi sunt, sed incidunt fuga, cum totam voluptatum! Similique architecto eaque omnis! Impedit explicabo debitis similique voluptas dolorem accusamus laborum, unde expedita cumque incidunt nihil?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In nisi dicta delectus officia, nemo corporis maxime quas ea ipsam sapiente praesentium at natus repellat repudiandae sequi sunt, sed incidunt fuga, cum totam voluptatum! Similique architecto eaque omnis! Impedit explicabo debitis similique voluptas dolorem accusamus laborum, unde expedita cumque incidunt nihil?</p>'
]); --}}
