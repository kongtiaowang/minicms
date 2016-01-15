<?php

/**
* 
*/
class Country 
{
	public $name;
	public $code;
	public $states;
	
	function __construct($name='',$code='',$states = array())
	{
		$this -> name = $name;
		$this -> code = $code;
		$this -> states = $states;
	}
}