<?php

namespace App\Models;

class Post
{
	private static $blog_post = [
		[
			"title" => "Judul Post Pertama",
			"slug" => "judul-post-pertama",
			"author" => "Mastika",
			"body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid temporibus illum recusandae necessitatibus
			tenetur aperiam ut facilis est eligendi sunt, pariatur ea architecto sed atque neque aut illo excepturi
			dolores obcaecati optio corrupti possimus tempore! Recusandae dolore odio eius deleniti laborum aliquam.
			Excepturi doloremque exercitationem, aperiam tempore veritatis et nostrum ea sapiente atque perspiciatis iste,
			numquam esse incidunt corporis explicabo ullam reiciendis deserunt, a expedita. Exercitationem itaque libero
			consequuntur eveniet aliquid praesentium laboriosam sunt dolore quidem voluptates deserunt, sed aut!"
		],

		[
			"title" => "Judul Post Kedua",
			"slug" => "judul-post-kedua",
			"author" => "Divamas",
			"body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore culpa incidunt quam exercitationem ex modi praesentium
			animi, nihil possimus suscipit necessitatibus temporibus consectetur hic voluptatum cupiditate facilis repudiandae nam
			maxime dolorum iure optio? Ducimus quisquam dolorem exercitationem omnis hic excepturi fugit. Minus facere unde rerum
			perspiciatis, dicta obcaecati et necessitatibus tempore in nobis, aliquam accusantium aperiam excepturi. Sint
			consequuntur praesentium autem fugiat soluta ullam. Eaque perspiciatis alias aspernatur vel nihil, nam sapiente
			voluptatibus iure architecto debitis nostrum velit sequi assumenda amet veritatis sed tempora illo exercitationem
			consequuntur laborum natus, commodi vitae! Exercitationem natus ad eius nihil possimus, maiores nesciunt provident."
		],
	];

	public static function all()
	{
		// return self::$blog_post;
		return collect(self::$blog_post);
	}

	public static function find($slug)
	{
		// $posts = self::$blog_post;

		// $post = [];
		// foreach ($posts as $p) {
		// 	if ($p["slug"] == $slug) {
		// 		$post = $p;
		// 	}
		// }
		// return $post;

		$posts = static::all();
		return $posts->firstWhere('slug', $slug);
	}
}
