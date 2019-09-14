<?php
namespace DesignPatterns\Creational\Adapter\LearnKu;

class Book implements BookInterface
{
	/**
	 * @var int
	 */
	private $page;
	public function turnPage()
	{
		$this->page = 1;
	}

	public function open()
	{
		$this->page++;
	}

	public function getPage(): int
	{
		return  $this->page;
	}

}