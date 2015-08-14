<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class LoginController extends Controller
{
	public function login()
	{
		if (Auth::attempt(Input::only('email', 'password'))) {

			return redirect()->route('home');

		} else if (Auth::attempt(Input::only('email', 'password')) == false){

			dd('fail');

		}
	}

	public function logout()
	{
		Auth::logout();

		return redirect()->home();
	}
}
