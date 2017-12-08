<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

	public function create(Request $request) {

		$post = new Post;
		$post->text = $request->text;
		$post->user_id = Auth::user()->id;
		$post->save();

		return back();

	}

	public function like($id, $like) {

		$post = Post::find($id);
		$user = Auth::user();
		$user_posts = json_decode($user->liked_posts, true);

		if ( $like == 1 ) {
			$post->likes += 1;
			$user_posts[] = $id;
			$state = "liked";
		} else {
			$post->likes -= 1;
			unset($user_posts[array_search($id, $user_posts)]);
			$state = "disliked";
		}

		$user->liked_posts = json_encode($user_posts);
		$user->save();
		$post->save();

		return $state;
	}

}
