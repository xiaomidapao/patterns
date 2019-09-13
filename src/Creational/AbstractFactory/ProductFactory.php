<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class ProductFactory
 * @package DesignPatterns\Creational\AbstractFactory
 */
class ProductFactory
{
	/**
	 *
	 */
	const SHIPPING_COSTS = 50;

	/**
	 * @param int $price
	 *
	 * @return Product
	 */
	public function createShippableProduct(int $price): Product
	{
		return new ShippableProduct($price, self::SHIPPING_COSTS);
	}

	/**
	 * @param int $price
	 *
	 * @return Product
	 */
	public function createDigitalProduct(int $price): Product
	{
		return new DigitalProduct($price);
	}
}