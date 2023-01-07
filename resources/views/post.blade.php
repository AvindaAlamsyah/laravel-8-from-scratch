@extends('components.layout')

@section('title', 'Post')

@section('content')
    <article>
        <h1>
            {{ $post->title }}
        </h1>
        <p>By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        <div>
            <p>{!! $post->content !!}</p>
        </div>
    </article>
    <button type="button"><a href="/">Back</a></button>
@endsection