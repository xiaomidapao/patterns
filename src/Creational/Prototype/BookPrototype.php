<?php
namespace DesignPatterns\Creational\Prototype;

abstract class BookPrototype
{
	/**
	 * @var string
	 */
	protected $title;
	/**
	 * @var string
	 */
	protected $category;

	abstract function __clone();

	/**
	 * @param string $title
	 */
	public function setTitle($title): void
	{
		$this->title = $title;
	}

	/**
	 * @param string $category
	 */
	public function setCategory($category): void
	{
		$this->category = $category;
	}


}