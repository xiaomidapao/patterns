<?php
namespace DesignPatterns\Creational\Adapter\LearnKu;


/**
 * 这里是一个适配器. 注意他实现了 BookInterface
 * Class EBookAdapter
 * @package DesignPatterns\Creational\Adapter\LearnKu
 */
class EBookAdapter implements BookInterface
{
	protected $eBook;

	/**
	 * EBookAdapter constructor.
	 *
	 * @param $eBook
	 */
	public function __construct( EBookInterface $eBook)
	{
		$this->eBook = $eBook;
	}


	public function turnPage()
	{
		$this->eBook->pressNext();
	}

	public function open()
	{
		$this->eBook->unlock();
	}

	/**
	 * int注意这里适配器的行为： EBookInterface::getPage() 将返回两个整型，除了 BookInterface
	 * 仅支持获得当前页，所以我们这里适配这个行为
	 * @return int
	 */
	public function getPage(): int
	{
		return $this->eBook->getPage()[0];
	}


}