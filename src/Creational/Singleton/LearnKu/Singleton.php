<?php

namespace DesignPatterns\Creational\Singleton\LearnKu;

final class Singleton
{
	private static $instance;

	/**
	 * 通过懒加载获取实例
	 * @return Singleton
	 */
	public static function getInstance(): Singleton
	{
		if(empty(static::$instance)){
			static::$instance = new static();
		}
		return static::$instance;
	}

	/**
	 * 不允许从外部调用以防止创建多个实例
	 * Singleton constructor.
	 */
	private function __construct()
	{
	}

	/**
	 * 防止实例被克隆（这会创建实例的副本）
	 */
	private function __clone()
	{
	}

	/**
	 * 防止反序列化（这将创建它的副本）
	 */
	private function __wakeup()
	{
	}
}
