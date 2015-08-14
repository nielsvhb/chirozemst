<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Users\UserCreator;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    public function show()
	{
		return view('register');
	}

	public function register(UserCreator $userCreator)
	{
		$data = Input::all();
		$userCreator->create($data);

		return redirect()->home();
	}
}
