<?php
namespace App\Events;

interface EventRepository
{
	public function make();

	public function save($event);

	public function find($id);

	public function findAllByDate();

	public function deleteById($id);

	public function delete($course);
}