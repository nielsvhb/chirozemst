<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
	public function login()
	{
		if (Auth::attempt(Input::only('email', 'password'))) {

			Session::put('success', 'U bent ingelogd.');

			return redirect()->route('home');

		}

		Session::put('error', 'Gegevens komen niet overeen.');

		return redirect()->home();
	}

	public function logout()
	{
		Auth::logout();

		Session::put('success', 'U bent uitgelogd.');

		return redirect()->home();
	}
}
