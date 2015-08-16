<div class="row">
	<div class="navbar-fixed">
		<nav class="red darken-4">
			<div class="col s10 offset-s1">
				<div class="nav-wrapper">
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<a href="{{ route('home') }}" class="brand-logo hide-on-med-and-down">
						<img src="{{ asset('images/logo.png') }}" width="40px" height="48px" class="logo">   Chiro Tijl Zemst
					</a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="{{ route('info') }}">Info</a></li>
						<li><a href="{{ route('afdelingen') }}">Afdelingen</a></li>
						<li><a href="{{ route('kalender') }}">Kalender</a></li>
						<li><a href="{{ route('contact') }}">Contact</a></li>
						<li class="divider"></li>

						@if (Auth::check())
							<li>
								<a class="dropdown-button" href="#" data-activates="dropdown1">
									{{ Auth::user()->getFullName() }}<i class="material-icons right">arrow_drop_down</i>
								</a>
							</li>
						@else
							<li><a class="modal-trigger" href="#modal1">Login</a></li>
						@endif

					</ul>

					<!-- Mobile Navigation Starts Here -->

					<ul class="side-nav" id="mobile-demo">
						<li><a href="{{ route('home') }}">Home</a></li>
						<li><a href="{{ route('info') }}">Info</a></li>
						<li><a href="{{ route('afdelingen') }}">Afdelingen</a></li>
						<li><a href="{{ route('kalender') }}">Kalender</a></li>
						<li><a href="{{ route('contact') }}">Contact</a></li>
						<li><a class="modal-trigger" href="#modal1">Login</a></li>
					</ul>

					<!-- Dropdown Structure -->

					<ul id="dropdown1" class="dropdown-content">
						<li><a href="{{ route('logout') }}">Logout</a></li>
					</ul>

				</div>
			</div>
		</nav>
	</div>
</div>

<!-- Login Modal Structure -->

<div id="modal1" class="modal">
	<div class="modal-content">
		<h4>Login</h4>

		<form method="POST" action="{{ route('login.do') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="row">
				<div class="input-field col s12">
					<input id="email" type="email" class="validate" name="email">
					<label for="email">Email</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12">
					<input id="password" type="password" class="validate" name="password">
					<label for="password">Password</label>
				</div>
			</div>

			<div class="row">
				<input type="submit" class="btn" value="Login">
				<div class="modal-footer">
					<a href="{{ route('register.show') }}" class="modal-action modal-close waves-effect waves-green btn-flat ">Nog geen account?</a>
				</div>
			</div>
		</form>

	</div>

</div>