<?php
namespace  DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Car;
use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Vehicle;
use DesignPatterns\Creational\Builder\Parts\Wheel;

/**
 * Class CarBuilder
 * @package DesignPatterns\Creational\Builder
 */
class CarBuilder implements BuilderInterface
{
	/**
	 * @var Car
	 */
	private $car;


	public function createVehicle()
	{
		$this->car = new Car();
	}

	/**
	 *
	 */
	public function addWheel()
	{
		$this->car->setPart('wheelLF',new Wheel());
		$this->car->setPart('wheelRF',new Wheel());
		$this->car->setPart('wheelLR',new Wheel());
		$this->car->setPart('wheelRR',new Wheel());
	}

	/**
	 * 设置引擎
	 */
	public function addEngine()
	{
		$this->car->setPart('engine',new Engine());
	}

	/**
	 * 设置门
	 */
	public function addDoors()
	{
		$this->car->setPart('rightDoor',new Door());
		$this->car->setPart('leftDoor',new Door());
		$this->car->setPart('trunkLid',new Door());
	}

	/**
	 * @return Vehicle
	 */
	public function getVehicle(): Vehicle
	{
		return  $this->car;
	}

}