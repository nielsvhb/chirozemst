<?php
namespace App\Http\Controllers;

use App\Events\EventRepository;
use App\Http\Requests;

class HomeController extends Controller
{
	protected  $events;

	public function __construct(EventRepository $events)
	{
		$this->events = $events;
	}

    public function home()
	{
		return view('home');
	}

	public function info()
	{
		return view('info');
	}

	public function afdelingen()
	{
		return view('afdelingen');
	}

	public function kalender()
	{
		$eventsByDate = $this->events->findAllByDate();

		return view('kalender', compact('eventsByDate'));
	}

	public function contact()
	{
		return view('contact');
	}
}
