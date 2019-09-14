<?php
namespace DesignPatterns\Creational\Adapter;

class Kindle implements EBookInterface
{
	private $page = 1;
	private $totalPages = 100;

	public function unlock()
	{
		$this->page++;
	}

	public function pressNext()
	{
		// TODO: Implement pressNext() method.
	}

	public function getPage()
	{
		return [$this->page, $this->totalPages];
	}

}