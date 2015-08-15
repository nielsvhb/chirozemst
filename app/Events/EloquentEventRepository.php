<?php
namespace App\Events;

class EloquentEventRepository implements EventRepository
{
	private $model;

	/**
	 * @param \App\Events\Event $model
	 */
	public function __construct(Event $model)
	{
		$this->model = $model;
	}

	/**
	 * @return static
	 */
	public function make()
	{
		return $this->model->newInstance();
	}

	/**
	 * @param $event
	 */
	public function save($event)
	{
		$event->save();
	}

	public function find($id)
	{
		return $this->model->find($id);
	}

	public function findAllByDate()
	{
		return $this->model->where('date','!=', 'null')->orderBy('date', 'asc')->get();
	}

	public function delete($event)
	{
		$this->model->destroy($event->id);
	}

}