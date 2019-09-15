<?php
namespace DesignPatterns\Creational\Bridge\LearnKu;
class PlainTextFormatter implements FormatterInterface
{
	public function format(string $text)
	{
		return $text;
	}

}