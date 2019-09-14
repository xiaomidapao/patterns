<?php

namespace DesignPatterns\Creational\StaticFactory\LearnKu;

use InvalidArgumentException;

/**
 * 静态工厂模式
 * Class StaticFactory
 * @package DesignPatterns\Creational\StaticFactory\LearnKu
 */
class StaticFactory
{
	/**
	 * @param string $type
	 *
	 * @return FormatterInterface
	 */
	public static function factory(string $type): FormatterInterface
	{
		if( $type == 'number' ) {
			return new FormatNumber();
		} else if($type == 'string'){
			return new FormatString();
		}

		throw new InvalidArgumentException("Unknown format given",-100);
	}
}