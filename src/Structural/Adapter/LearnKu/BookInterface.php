<?php

namespace DesignPatterns\Creational\Adapter\LearnKu;

interface BookInterface
{
	public function turnPage();

	public function open();

	public function getPage(): int;
}