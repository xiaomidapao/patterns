<?php
namespace DesignPatterns\Creational\Adapter\LearnKu;

interface EBookInterface
{
	public function unlock();

	public function pressNext();

	public function getPage();
}