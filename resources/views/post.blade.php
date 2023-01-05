@extends('components.layout')

@section('title', 'Post')

@section('content')
    <article>
        <h1>
            {{ $post->title }}
        </h1>
        <div>
            {!! $post->content !!}
        </div>
    </article>
    <button type="button"><a href="/">Back</a></button>
@endsection