<?php

namespace App\Repositories;

use App\Post;
use App\Redis;

class Posts 

{
	public function all()
	{
		//return all posts
		return Post::all();
	}
}