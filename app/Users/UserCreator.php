<?php
namespace App\Users;

use Illuminate\Support\Facades\Hash;

class UserCreator
{
	private $users;

	public function __construct(UserRepository $users)
	{
		$this->users = $users;
	}

	public function create($data)
	{
		$user = $this->users->make();

		$user->first_name = $data['first_name'];
		$user->last_name = $data['last_name'];
		$user->email = $data['email'];
		$user->password = Hash::make($data['password']);

		$this->users->save($user);

		return $user;
	}
}