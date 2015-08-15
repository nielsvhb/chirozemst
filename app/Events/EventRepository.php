<?php
namespace App\Events;

interface EventRepository
{
	public function make();

	public function save($event);

	public function find($id);

	public function findAllByDate();

	public function delete($course);
}