<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Users\UserCreator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function show()
	{
		return view('register');
	}

	public function register(UserCreator $userCreator)
	{
		$data = Input::all();

		if (isset ($data['first_name']) && isset($data['last_name']) && isset ($data['password']) && isset($data['email']))
		{
			if ($data['access-code'] == "Langeplanken") {
				$userCreator->create($data);
				Session::put('success', 'Profiel werd aangemaakt.');

				return redirect()->home();

			} else {
				Session::put('error', 'De toegangscode is niet correct');

				return redirect()->home();
			}
		}
		else {
			Session::put('error', 'Gelieve alle velden in te vullen.');

			return view('register');

		}
	}
}
