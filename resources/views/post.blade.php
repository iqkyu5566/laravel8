{{-- @dd($post) --}}

@extends('layouts.main')

@section('baju')
    <article>
        <h1>{{ $title }}</h1>
        <h5>{{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    </article>

    <a href="/blog/">Back to Blog</a>
@endsection