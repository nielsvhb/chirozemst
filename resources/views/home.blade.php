@extends('master')
@section('content')

<div class="slider">
	<ul class="slides">
		<li>
			<img src="{{ asset('images/slider1.jpg') }}">
			<div class="caption left-align shadow">
				<h3>Chiro is...</h3>
				<h5 class="light grey-text text-lighten-3">samen op trektocht</h5>
			</div>
		</li>
		<li>
			<img src="{{ asset('images/slider2.jpg') }}">
			<div class="caption center-align shadow">
				<h3>Chiro is...</h3>
				<h5 class="light grey-text text-lighten-3">er even tussenuit</h5>
			</div>
		</li>
		<li>
			<img src="{{ asset('images/slider3.jpg') }}">
			<div class="caption left-align shadow">
				<h3>Chiro is...</h3>
				<h5 class="light grey-text text-lighten-3">er zijn voor elkaar</h5>
			</div>
		</li>
		<li>
			<img src="{{ asset('images/slider4.jpg') }}">
			<div class="caption center-align shadow">
				<h3>Chiro is...</h3>
				<h5 class="light grey-text text-lighten-3">samen iets opbouwen</h5>
			</div>
		</li>
	</ul>
</div>
<div class="row">
	<div class="col s10 offset-s1">
		<h3 class="header-3">Nieuws</h3>
	</div>
</div>
@if(Auth::check())
<div class="row">
	<div class="post-create col s8 offset-s2">

	{!! Form::open(['route' => 'home', 'id' => 'home-post']) !!}

		<div class="input-field col s12">
			{!! Form::text('title', null, ['class' => '', 'id' => 'title']) !!}
			{!! Form::label('title', 'Titel') !!}
		</div>

		<div class="input-field col s12">
			<textarea id="content" class="materialize-textarea"  name="content"></textarea>
			{!! Form::label('content', 'Inhoud', ['class' => '']) !!}
		</div>

		<div class="col l4 offset-l4 s12 m12">
			<a class="waves-effect waves-light btn post-button blue-grey" onclick="document.getElementById('home-post').submit();"><i class="material-icons left">done</i>Plaats bericht</a>
		</div>

	{!! Form::close() !!}

	</div>
</div>
@endif

<div class="row">
	<div class="col s10 offset-s1">
		@foreach($posts as $post)
			<div class="row">
				<div class="col s12">
					<div class="card blue-grey">
						<div class="card-content white-text hover_class">
							<span class="card-title">{{ $post->title }}</span>
							<p>{{ $post->content }}</p>

								@if(Auth::check())
									<a href="{{ route('post.delete', $post->id) }}"><i class="material-icons post-delete">delete</i></a>
								@endif
						</div>
						<div class="card-action">
							<a href="">Geplaatst door {{ $post->author }}.</a>
						</div>
					</div>
				</div>
			</div>


		@endforeach
	</div>
</div>



@stop