<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	use Sluggable, HasFactory;
	// protected $fillable = ['catagory_id', 'title', 'excerpt', 'body', 'slug', 'author'];
	protected $guarded = ['id'];
	protected $with = ['category', 'author'];

	/**
	 * Return the sluggable configuration array for this model.
	 *
	 * @return array
	 */
	public function sluggable(): array
	{
		return [
			'slug' => [
				'source' => 'title'
			]
		];
	}

	public function scopeFilter($query, array $filters)
	{
		// if (isset($filters['search']) ? $filters['search'] : false) {
		// 	return $query->where('title', 'like', '%' . $filters['search'] . '%')
		// 		->orWhere('body', 'like', '%' . $filters['search'] . '%');
		// }

		// $query->when($filters['search'] ?? false, function ($query, $search) {
		// 	return $query->where('title', 'like', '%' . $search . '%')
		// 		->orWhere('body', 'like', '%' . $search . '%');
		// });

		$query->when($filters['search'] ?? false, function ($query, $search) {
			return $query->where(function ($query) use ($search) {
				$query->where('title', 'like', '%' . $search . '%')
					->orWhere('body', 'like', '%' . $search . '%');
			});
		});

		$query->when($filters['category'] ?? false, function ($query, $category) {
			return $query->whereHas('category', function ($query) use ($category) {
				$query->where('slug', $category);
			});
		});

		$query->when(
			$filters['author'] ?? false,
			fn ($query, $author)
			=> $query->whereHas('author', fn ($query)
			=>	$query->where('username', $author))
		);
	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function author()
	{
		return $this->belongsTo(User::class, 'user_id');
	}

	public function getRouteKeyName()
	{
		return 'slug';
	}
}
