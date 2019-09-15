<?php
namespace DesignPatterns\Creational\Bridge\LearnKu;
class HelloWorldService extends Service
{
	public function get()
	{
		$this->implementation->format('Hello World');
	}
}