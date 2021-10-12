@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post by : {{ $title }}</h1>

@foreach ($posts as $post)
<article>
	<h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
	<h5>By : {{ $post->author->name }}</h5>
	<p>{{ $post->body }}</p>
</article>
@endforeach
<a href="/blog" class="d-block mb-3">Back to Posts</a>
@endsection