<?php
namespace App\Http\Controllers;

use App\Events\Event;
use App\Events\EventCreator;
use App\Events\EventRepository;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class CalendarController extends Controller
{
	protected  $events;

	public function __construct(EventRepository $events)
	{
		$this->events = $events;
	}

	public function create(EventCreator $eventCreator)
	{
		$data = Input::all();
		$eventCreator->create($data);
		$eventsByDate = $this->events->findAllByDate();

		return view('kalender', compact('eventsByDate'));
	}

	public function delete(Event $event)
	{
		$this->events->delete($event);

		return redirect()->back();
	}
}
