<?php
namespace DesignPatterns\Creational\Bridge\LearnKu;

class HtmlFormatter implements FormatterInterface
{
	public function format(string $text)
	{
		return sprintf('<p>%s</p>',$text);
	}

}