<?php
namespace App\Http\Controllers;

use App\Events\Event;
use App\Events\EventCreator;
use App\Events\EventRepository;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

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

		Session::put('success', 'Nieuw evenement aangemaakt.');

		return view('kalender', compact('eventsByDate'));
	}

	public function delete(Event $event)
	{
		$this->events->delete($event);

		Session::put('success', 'Evenement "'.$event->title. '" verwijderd.');

		return redirect()->back();
	}
}
