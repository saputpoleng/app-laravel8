@extends('dashboard.layouts.main')

@section('container')
<div class="container">
	<div class="row my-3">
		<div class="col-lg-8">
			<h1 class="mb-3">{{ $post->title }}</h1>

			{{-- <a href=""></a> --}}
			<a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>
				Back to Posts </a>
			<a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
				Edit </a>
			<form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
				@method('delete')
				@csrf
				<button class="btn bg-danger text-white" onclick="return confirm('Are you sure ?')"><span
						data-feather="x-circle"></span>Delete</button>
				{{-- <a href="/dashboard/posts/{{ $post->id }}" class="badge bg-danger"><span
					data-feather="x-circle"></span></a> --}}
			</form>
			{{-- <a href="/dashboard/posts" class="btn btn-danger"><span data-feather="x-circle"></span>
				Delete </a> --}}

			@if ($post->image)
			<div style="max-height: 350px; overflow: hidden;">
				<img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-2">
			</div>
			@else
			<img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}"
				class="img-fluid mt-2">
			@endif

			<article class="my-3 fs-5">
				{{-- {{ $post->body }} --}}
				{!! $post->body !!}
			</article>

		</div>
	</div>
</div>
@endsection