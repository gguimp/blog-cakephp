<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Article extends Entity
{
	protected function _getTitle($title)
	{
		return ucwords($title);
	}
}