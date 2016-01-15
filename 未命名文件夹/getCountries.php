<?php

require 'CountriesRepository.php';





$c = CountriesRepository::getCountries();
echo json_encode($c);


