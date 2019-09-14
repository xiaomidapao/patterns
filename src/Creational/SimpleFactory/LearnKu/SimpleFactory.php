<?php

namespace DesignPatterns\Creational\SimpleFactory\LearnKu;

class SimpleFactory
{
	public function createBicycle(): Bicycle
	{
		return new Bicycle();
	}
}