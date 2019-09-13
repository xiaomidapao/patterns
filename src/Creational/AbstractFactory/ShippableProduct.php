<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class ShippableProduct
 * @package DesignPatterns\Creational\AbstractFactory
 */
class ShippableProduct implements Product
{
	/**
	 * @var float
	 */
	private $productPrice;

	/**
	 * @var float
	 */
	private $shippingCosts;

	/**
	 * ShippableProduct constructor.
	 *
	 * @param $productPrice  float
	 * @param $shippingCosts float
	 */
	public function __construct($productPrice, $shippingCosts)
	{
		$this->productPrice  = $productPrice;
		$this->shippingCosts = $shippingCosts;
	}


	/**
	 * @return int
	 */
	public function calculatePrice(): int
	{
		return $this->productPrice + $this->shippingCosts;
	}

}