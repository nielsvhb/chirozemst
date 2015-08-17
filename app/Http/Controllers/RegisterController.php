<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Users\UserCreator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function show()
	{
		return view('register');
	}

	public function register(UserCreator $userCreator, Requests\RegisterRequest $request)
	{
		$data = $request->all();

		if ($data['access-code'] == "Langeplanken") {
			$user = $userCreator->create($data);
			Auth::login($user);
			Session::put('success', 'Profiel werd aangemaakt.');

			return redirect()->home();

		} else {
			Session::put('error', 'De toegangscode is niet correct');

			return redirect()->home();
		}

	}
}
