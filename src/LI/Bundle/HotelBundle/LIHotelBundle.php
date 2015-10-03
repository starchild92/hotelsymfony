<?php

namespace LI\Bundle\HotelBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LIHotelBundle extends Bundle
{
	public function getParent(){
		return 'FOSUserBundle';
	}
}
