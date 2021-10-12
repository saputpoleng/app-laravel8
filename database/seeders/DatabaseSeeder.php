<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{


		User::create([
			'name' => 'mastika ketut',
			'username' => 'mastika',
			'email' => 'm4stika@gmail.com',
			'password' => bcrypt('811899')
		]);

		// User::create([
		// 	'name' => 'divamas',
		// 	'email' => 'divamas@gmail.com',
		// 	'password' => bcrypt('811899')
		// ]);

		User::factory(5)->create();


		Category::create([
			'name' => 'Programming',
			'slug'  => 'programming',
		]);

		Category::create([
			'name' => 'Personal',
			'slug'  => 'personal',
		]);

		Category::create([
			'name' => 'Web Design',
			'slug'  => 'webdesign',
		]);

		Post::factory(20)->create();

		// Post::create([
		// 	'title' => 'Judul Pertama',
		// 	'category_id' => 1,
		// 	'user_id' => 1,
		// 	'slug'  => 'judul-pertama',
		// 	'author' => 'mastika',
		// 	'excerpt' => 'Lorem ipsum, dolor sitamet consectetur adipisicing elit. Quo illum ad, itaque',
		// 	'body' => "<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo illum ad, itaque
		// 					tenetur dolore ut ipsa assumenda quisquam repudiandae aperiam obcaecati quos
		// 					sint nobis aut,</p>
		// 					<p>nemo ducimus accusamus. Adipisci blanditiis voluptate, distinctio eum expedita
		// 					facere dicta alias. Sit similique facilis rerum explicabo labore rem!
		// 					Quibusdam tenetur, quo laudantium animi numquam, sed at rem earum nobis culpa
		// 					distinctio voluptates? Qui nemo distinctio in esse, quas aliquam quidem itaque
		// 					id deserunt, quibusdam voluptas, iste eum accusamus consequuntur totam illo
		// 					incidunt! Corrupti delectus repudiandae similique, esse dolorem dignissimos
		// 					vel tempora saepe modi repellendus doloremque reprehenderit, illum eveniet
		// 					ipsum aperiam. Facere, inventore adipisci.</p>"
		// ]);


		// Post::create([
		// 	'category_id' => 2,
		// 	'user_id' => 2,
		// 	'title' => 'Judul Kedua',
		// 	'slug'  => 'judul-kedua',
		// 	'author' => 'mastika ketut',
		// 	'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto aliquam',
		// 	'body' => "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto aliquam itaque ab asperiores aliquid sequi debitis deserunt iusto, quibusdam optio</p>
		// 					<p>est excepturi, illum ipsa impedit. Nemo eos modi doloremque quaerat qui vel, officia dolor sunt. Dicta cupiditate voluptates cumque quasi possimus repudiandae ipsam illo odio modi minima aut eaque ea est nemo commodi temporibus labore maxime recusandae, unde corrupti porro praesentium? Ducimus perspiciatis ex facere eligendi possimus officiis repellat temporibus nisi inventore voluptatum. Iure fugiat deleniti laboriosam modi. Enim cum voluptatibus voluptate perspiciatis tenetur repudiandae laboriosam velit. Dolorum, perferendis totam ab laboriosam deserunt, officiis numquam ut odio impedit omnis delectus?</p>"
		// ]);

		// Post::create([
		// 	'category_id' => 1,
		// 	'user_id' => 2,
		// 	'title' => 'Judul Ketiga',
		// 	'slug'  => 'judul-ketiga',
		// 	'author' => 'Divamas',
		// 	'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis maiores veniam',
		// 	'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis maiores veniam porro sequi recusandae quam itaque fugit similique? Quod eaque, laudantium, mollitia enim et amet dignissimos quasi, pariatur iste sed necessitatibus! Sit neque fugiat dolorum aut provident magnam nemo deserunt quibusdam sapiente laboriosam. Molestiae nam ab voluptatem accusantium eaque, impedit, esse porro aliquid eos vel libero corporis facilis animi voluptatibus cupiditate vero in culpa explicabo nostrum quo dicta. Excepturi doloremque corporis commodi architecto atque totam velit suscipit ullam, perspiciatis explicabo exercitationem nobis culpa quae voluptate ex consequatur, minus ducimus, officia eligendi? Voluptatum molestias ea obcaecati dolorem, at vero eligendi provident."
		// ]);

		// Post::create([
		// 	'category_id' => 3,
		// 	'user_id' => 1,
		// 	'title' => 'Judul Keempat',
		// 	'slug'  => 'judul-keempat',
		// 	'author' => 'Divamas',
		// 	'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis maiores veniam',
		// 	'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis maiores veniam porro sequi recusandae quam itaque fugit similique? Quod eaque, laudantium, mollitia enim et amet dignissimos quasi, pariatur iste sed necessitatibus! Sit neque fugiat dolorum aut provident magnam nemo deserunt quibusdam sapiente laboriosam. Molestiae nam ab voluptatem accusantium eaque, impedit, esse porro aliquid eos vel libero corporis facilis animi voluptatibus cupiditate vero in culpa explicabo nostrum quo dicta. Excepturi doloremque corporis commodi architecto atque totam velit suscipit ullam, perspiciatis explicabo exercitationem nobis culpa quae voluptate ex consequatur, minus ducimus, officia eligendi? Voluptatum molestias ea obcaecati dolorem, at vero eligendi provident."
		// ]);
	}
}
