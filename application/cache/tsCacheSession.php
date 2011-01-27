<?php

/**
 * @version		0.1 alpha-test - 2011-01-27
 * @package		Tourism System Server
 * @copyright	Copyright (C) 2010 Raccourci Interactive
 * @license		Qt Public License; see LICENSE.txt
 * @author		Nicolas Marchand <nicolas.raccourci@gmail.com>
 */

	final class tsCacheSession implements tsCacheInterface
	{

		public function __construct()
		{
			
		}
		
		
		public function set($varName, $value)
		{
			$_SESSION[$varName] = $value;
		}
		
		
		public function get($varName)
		{
			return (isset($_SESSION[$varName]) ? $_SESSION[$varName] : false);
		}
		
		
		public function delete($varName)
		{
			unset($_SESSION[$varName]);
		}

	}



?>