<?php
namespace App\Users;

class EloquentUserRepository implements UserRepository
{
	public function __construct(User $model)
	{
		$this->model = $model;
	}

	public function make()
	{
		return $this->model->newInstance();
	}

	public function save($user)
	{
		$user->save();
	}
}