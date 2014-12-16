<?php

namespace Application\Service;

use Dal\Service\AbstractService;

class Demo extends AbstractService
{
	/**
	 * @invokable
	 * @return string
	 */
	public function main()
	{
		return array(__CLASS__, __METHOD__);
	}
}