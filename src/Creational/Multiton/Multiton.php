<?php
namespace DesignPatterns\Creational\Multiton;

final class Multiton
{
	const INSTANCE_1 = '1';
	const INSTANCE_2 = '2';

	/**
	 * 实例数组
	 * @var array
	 */
	private static $instances = [];

	private function __construct()
	{
	}

	/**
	 * 防止对象被克隆
	 */
	private function __clone()
	{
	}

	public static function getInstance(string $instanceName):Multiton
	{
		if(!isset(self::$instances[$instanceName])){
			self::$instances[$instanceName] = new self();
		}
		return self::$instances[$instanceName];
	}

	/**
	 * 防止实例被序列化
	 */
	private function __wakeup()
	{
	}


}
