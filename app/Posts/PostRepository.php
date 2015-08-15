<?php
namespace App\Posts;

class PostRepository
{
	public $model;

	public function __construct(Post $model)
	{
		$this->model = $model;
	}

	public function make()
	{
		return $this->model->newInstance();
	}

	public function save($post)
	{
		$post->save();
	}

	public function findAllByDate()
	{
		$postsByDate = Post::orderBy('created_at', 'desc')->get();

		return $postsByDate;
	}
}