<?php

namespace DesignPatterns\Creational\Bridge\LearnKu;

abstract class Service
{
	/**
	 * @var FormatterInterface
	 */
	protected $implementation;

	public function __construct(FormatterInterface $formatter)
	{
		$this->implementation = $formatter;
	}

	public function setImplementation(FormatterInterface $formatter)
	{
		$this->implementation = $formatter;
	}

	abstract public function get();
}