@extends('_layouts.master')

@section('body')

    <div class="container mt-5">

        <h2>Manual Blog Post</h2>
        <ul>
            <li><a href="/blog/blog-post-one">Blog Post One</a></li>
            <li><a href="/blog/blog-post-two">Blog Post Two</a></li>
        </ul>

        <h2>Automatic Blog Post</h2>
        <ul>
            @foreach ($posts as $post)
                <li><a href="{{ $post->getUrl() }}"> {{ $post->title }} </a></li>
            @endforeach
        </ul>

        <h2>Reddit r/aww</h2>
        <ul>
            @foreach ($reddit as $post)
                <li><a href="{{ $post->getUrl() }}"> {{ $post->title }} </a></li>
            @endforeach
        </ul>
    </div>

@endsection
