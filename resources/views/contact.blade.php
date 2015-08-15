@extends('master')
@section('content')
<div class="row">
	<div class="col s10 offset-s1">
		<ul class="collection">

			<li class="collection-item avatar">
				<img src="{{ asset('images/avatars/avatar.jpg') }}" alt="avatar" class="circle">
				<span class="title contact">An Roofthoofd</span>
				<p class="contact">0492/59.99.01<br>anroofthoofd@msn.com</p>
				<a href="#!" class="secondary-content">Volwassen Begeleider</a>
			</li>

			<li class="collection-item avatar">
			  <img src="{{ asset('images/avatars/joren.jpg') }}" alt="avatar" class="circle">
			  <span class="title contact">Joren Brassine</span>
			  <p class="contact">0496/04.82.01<br>joren_brassine@hotmail.com</p>
			  <a href="#!" class="secondary-content">Kabouters</a>
			</li>

			<li class="collection-item avatar">
				<img src="{{ asset('images/avatars/elise.jpg') }}" alt="avatar" class="circle">
				<span class="title contact">Elise Chevalier</span>
				<p class="contact">0477/33.74.65<br>chevalier.elise@hotmail.be</p>
				<a href="#!" class="secondary-content">Kabouters</a>
			</li>

			<li class="collection-item avatar">
				<img src="{{ asset('images/avatars/tibo.jpg') }}" alt="avatar" class="circle">
				<span class="title contact">Tibo Andries</span>
				<p class="contact">0499/38.30.30<br>Andrie.tibo@gmail.com</p>
				<a href="#!" class="secondary-content">Kabouters</a>
			</li>

			<li class="collection-item avatar">
				<img src="{{ asset('images/avatars/faris.jpg') }}" alt="avatar" class="circle">
				<span class="title contact">Faris Bachaou</span>
				<p class="contact">0488/81.18.79<br>faris.bachaou01@gmail.com</p>
				<a href="#!" class="secondary-content">Kabouters</a>
			</li>

		  </ul>
	</div>
</div>

	@stop