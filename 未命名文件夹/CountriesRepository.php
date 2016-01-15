<?php
require 'country.php';
require 'state.php';

class CountriesRepository
{
	

	private static $counties = array();

	protected static function init()
	{
		$counties = array();
		
		array_push($counties,new Country(
			
			'Austria','au',array(new State("Vienne"),new State("Stryle"))

		));

		array_push($counties,new Country(
			
			'Canada','ca',array(new State("Quecec"),new State("Ontario"),new State("Albert"))

		));

		array_push($counties,new Country(
			
			'Usa','us',array()

		));


		self::$counties = $counties;
	}

    public static function getCountries()
    {

    	if(count(self::$counties) === 0)
    	{
    		self::init();
    	}

    	return self::$counties;

    }



}