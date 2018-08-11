<?php

namespace Tests\Unit;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
	use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        //Given I have two record in my database stored months apart
        $first = factory(Post::class)->create();
        $second = factory(Post::class)->create([
        	'created_at' => \Carbon\Carbon::now()->subMonth()
        ]);

        //When I fetch the archive
    	$posts = Post::archives();
    	
        //Then they should be in proper format
        // $this->assertCount(2, $posts);

        $this->assertEquals([
        	[
        		'year'     => $first->created_at->format('Y'),
        		'month'    => $first->created_at->format('F'),
        		'published' => 1
        	],

        	[
        		'year'     => $second->created_at->format('Y'),
        		'month'    => $second->created_at->format('F'),
        		'published' => 1
        	]

        ], $posts);
    }
}
