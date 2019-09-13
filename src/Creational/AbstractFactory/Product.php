<?php
/**
 * 抽象工厂
 */

namespace DesignPatterns\Creational\AbstractFactory;

interface Product
{
	public function calculatePrice(): int;
}