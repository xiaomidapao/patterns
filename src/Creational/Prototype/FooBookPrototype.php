<?php
namespace DesignPatterns\Creational\Prototype;

class FooBookPrototype extends BookPrototype
{
	protected $category = 'Foo';
	function __clone()
	{
	}

}