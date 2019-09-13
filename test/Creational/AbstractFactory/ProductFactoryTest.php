<?php

namespace DesignPatterns\Creational\AbstractFactory;

use PHPUnit\Framework\TestCase;

class ProductFactoryTest extends TestCase
{
	public function testCanCreateDigitalProduct()
	{
		$factory = new ProductFactory();
		$product = $factory->createDigitalProduct(150);
		$this->assertInstanceOf(DigitalProduct::class, $product);
	}

	public function testCanCreateShippableProduct()
	{
		$factory = new ProductFactory();
		$product = $factory->createShippableProduct(150);
		$this->assertInstanceOf(ShippableProduct::class, $product);
	}

	public function testCanCalculatePriceForDigitalProduct()
	{
		$factory = new ProductFactory();
		$product = $factory->createDigitalProduct(150);
		$this->assertEquals(150,$product->calculatePrice(),'不符合');
	}

	public function testCanCalculatePriceForShippableProduct()
	{
		$factory = new ProductFactory();
		$product = $factory->createShippableProduct(160);
		$this->assertEquals(210,$product->calculatePrice());
	}
}
