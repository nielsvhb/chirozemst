<?php
namespace App\Events;

use Illuminate\Support\Facades\Auth;

class EventCreator
{
	private $events;

	public function __construct(EventRepository $events)
	{
		$this->events = $events;
	}

	public function create($data)
	{
		$event = $this->events->make();

		$event->title = $data['title'];
		$event->author = Auth::user()->first_name;
		$event->date = $data['date'];

		$this->events->save($event);

		return $event;
	}
}