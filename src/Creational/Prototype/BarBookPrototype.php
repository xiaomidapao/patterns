<?php
namespace DesignPatterns\Creational\Prototype;

class BarBookPrototype extends BookPrototype
{
	/**
	 * @var string
	 */
	protected $category = 'Bar';
	function __clone()
	{
	}

}