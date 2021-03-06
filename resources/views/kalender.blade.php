@extends('master')
@section('content')

@if(Auth::check())
	{!! Form::open(['route' => 'kalender', 'id' => 'form-id']) !!}
	<div class="row">
		<div class="col s8 offset-s2 event-create">
			<div class="row">
				<div class="input-field col l8 offset-l2 m6 s12">
					{!! Form::text('title', null, ['required', 'class' => 'validate', 'id' => 'title']) !!}
					{!! Form::label('title', 'Naam evenement') !!}
				</div>

				<div class="input-field col l8 offset-l2 m6 s12">
					<input type="date" class="datepicker date" name="date" required>
					{!! Form::label('date', 'Datum', ['class' => 'active']) !!}
				</div>
			</div>

			<div class="row">
				<div class="col l8 offset-l2 m6 offset-m3 s12">
					<a class="waves-effect waves-light btn" onclick="document.getElementById('form-id').submit();Materialize.showStaggeredList('.kalender');"><i class="material-icons left">done</i>maak evenement</a>
				</div>
			</div>
		</div>
	</div>
	{!! Form::close() !!}
@endif
<div class="row">
	<div class="col s10 offset-s1">
		<ul class="collection kalender">
			@foreach( $eventsByDate as $event)
				<li class="collection-item">
					<span class="title hover_class">{{ $event->title }}
						@if(Auth::check())
							<a href="{{ route('event.delete', $event->id) }}"><i class="material-icons icon-delete">delete</i></a>
						@endif
					</span>
					<span class="secondary-content">{{ $event->getReadableDate($event) }}</span>
				</li>
			@endforeach
		</ul>
	</div>
</div>

@stop