<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

	public function rules()
	{
		return [
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required|unique:users',
			'password' => 'required|min:6'
		];
	}

	public function authorize()
	{
		return true;
	}
}