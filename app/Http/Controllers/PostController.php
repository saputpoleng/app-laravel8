<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
	public function index()
	{
		// $posts = Post::latest();
		$title = '';
		if (request('category')) {
			$category = Category::firstWhere('slug', request('category'));
			$title = ' in ' . $category->name;
		}

		if (request('author')) {
			$author = User::firstWhere('username', request('author'));
			$title = ' by ' . $author->name;
		}

		return view('posts', [
			"title" => "All Posts" . $title,
			// "posts" => Post::all()
			// "posts" => Post::latest()->get()
			// "posts" => Post::latest()->get()
			// "posts" => $posts->get()
			// "posts" => Post::with(['author', 'category'])->latest()->Filter(request(['search', 'category', 'author']))
			// 	->paginate(7)->withQueryString()

			"posts" => Post::latest()->Filter(request(['search', 'category', 'author']))
				->paginate(7)->withQueryString()
		]);
	}

	public function show(Post $post)
	{
		return view('post', [
			"title" => "Single Post",
			"post" => $post
			// "post" => Post::find($id)
		]);
	}
}
