<?php
namespace App\Posts;

class PostRepository
{
	private $model;

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

	public function find($id)
	{
		return $this->model->find($id);
	}

	public function findAllByDate()
	{
		$postsByDate = Post::orderBy('created_at', 'desc')->get();

		return $postsByDate;
	}

	public function delete($post)
	{
		$this->model->destroy($post->id);
	}
}