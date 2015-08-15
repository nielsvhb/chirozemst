@extends('master')
@section('content')

@if(Auth::check())
	{!! Form::open(['route' => 'kalender', 'id' => 'form-id']) !!}
	<div class="row">
		<div class="col s8 offset-s2 event-create">
			<div class="row">
				<div class="input-field col s8 offset-s2 m6">
					<i class="material-icons prefix">today</i>
					{!! Form::text('title', null, ['required', 'class' => 'validate', 'id' => 'icon_prefix']) !!}
					{!! Form::label('icon_prefix', 'Naam evenement') !!}
				</div>

				<div class="input-field col s8 offset-s2 m6">
					<input type="date" class="datepicker date" name="date" required>
					{!! Form::label('date', 'Datum', ['class' => 'active']) !!}
				</div>
			</div>

			<div class="row">
				<div class="col s8 offset-s2 m4 offset-m4">
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