<?php
namespace App\Users;

interface UserRepository
{
	public function make();

	public function save($user);
}