<?php
namespace App\Posts;

use Illuminate\Support\Facades\Auth;

class PostCreator
{
	protected $posts;

	public function __construct(PostRepository $posts)
	{
		$this->posts = $posts;
	}
	public function create($data)
	{
		$post = $this->posts->make();
		$post->title = $data['title'];
		$post->content = $data['content'];
		$post->author = Auth::user()->getFullName();

		$this->posts->save($post);

		return $post;
	}
}