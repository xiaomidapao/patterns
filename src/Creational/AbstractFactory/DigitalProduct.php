<?php
namespace DesignPatterns\Creational\AbstractFactory;

class DigitalProduct implements Product
{
	/**
	 * @var float
	 */
	private $price;

	/**
	 * DigitalProduct constructor.
	 *
	 * @param float $price
	 */
	public function __construct(float $price)
	{
		$this->price = $price;
	}

	public function calculatePrice(): int
	{
		return $this->price;
	}

}
