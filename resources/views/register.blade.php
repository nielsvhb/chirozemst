@extends('master')
@section('content')

<div class="row">
	<div class="col s10 offset-s1">
		<h4>Nieuw profiel</h4>

		<form method="POST" action="{{ route('register.do') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="row">
				<div class="input-field col s6">
					<input id="first_name" type="text" class="validate" name="first_name" required>
					<label for="first_name">Voornaam</label>
				</div>

				<div class="input-field col s6">
					<input id="last_name" type="text" class="validate" name="last_name" required>
					<label for="last_name">Familienaam</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<input id="email" type="email" class="validate" name="email" required>
					<label for="email">Email</label>
					@if ($errors->has('email'))
						{{ $errors->first('email') }}
					@endif
				</div>

				<div class="input-field col s6">
					<input id="password" type="password" class="validate" name="password" required>
					<label for="password">Password</label>
					@if ($errors->has('password'))
						{{ $errors->first('password') }}
					@endif
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<input type="text" id="access-code" name="access-code" class="validate" required>
					<label for="access-code">Toegangscode</label>
				</div>
			</div>

			<div class="row">
				<input type="submit" class="btn" value="Aanmelden">
			</div>
		</form>
	</div>
</div>

@stop