<?php
namespace App\Events;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $table = 'events';

	protected $fillable = ['title', 'author', 'date'];

	public function getReadableDate($event)
	{
		$date = $event->date;

		$year = substr($date, 0, 4);
		$month = substr($date, -5, -3);
		$day = substr($date, 8, 9);

		switch ($month) {

			case '01':
				$month = "januari";
				break;

			case '02':
				$month = "februari";
				break;

			case '03':
				$month = "maart";
				break;

			case '04':
				$month = "april";
				break;

			case '05':
				$month = "mei";
				break;

			case '06':
				$month = "juni";
				break;

			case '07':
				$month = "juli";
				break;

			case '08':
				$month = "augustus";
				break;

			case '09':
				$month = "september";
				break;

			case '10':
				$month = "oktober";
				break;

			case '11':
				$month = "november";
				break;

			case '12':
				$month = "december";
				break;
		}

		return $day . ' ' . $month .' '. $year;
	}
}
