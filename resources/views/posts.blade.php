@extends('components.layout')

@section('title', 'Posts')

@section('content')
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            <h5>{{ $post->category->name }}</h5>

            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
@endsection