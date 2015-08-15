<?php
namespace App\Http\Controllers;

use App\Events\EventRepository;
use App\Http\Requests;
use App\Posts\PostCreator;
use App\Posts\PostRepository;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
	protected $events;
	protected $posts;

	public function __construct(EventRepository $events, PostRepository $posts)
	{
		$this->events = $events;
		$this->posts = $posts;
	}

    public function home()
	{
		$posts = $this->posts->findAllByDate();

		return view('home', compact('posts'));
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

	public function create(PostCreator $postCreator) {
		$data = Input::all();
		$postCreator->create($data);
		$posts = $this->posts->findAllByDate();
		Session::put('success', 'Je bericht werd geplaatst');

		return view('home', compact('posts'));
	}
}
