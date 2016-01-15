var app = angular.module('funwithcountries', []);

app.controller('countriesctrl', function ($scope,$http) {
 
  

  $http({method:'GET',
  		url:'getCountries.php'

  }).success(function(data){
  	$scope.countries = data;
  });

   
  // this.newState = null;

  // $scope.addStateTo = function(country){
  // 	alert("fjdslak");
  // 		if(this.newState!=null && typeof(this.newState)!="undefined" && this.newState!=""){
  //      console.log(this.newState);
  // 		country.states.push({name: this.newState});
  // 		this.newState = "";
  // 	}
  // }

});


app.controller('bbcontroller', function ($scope,$http) {
 
  

  $http({method:'GET',
  		url:'getCountries.php'

  }).success(function(data){
  	$scope.countries = data;
  });

   
  this.newState = null;

  $scope.addStateTo = function(country){
  	alert("fjdslak");
  		if(this.newState!=null && typeof(this.newState)!="undefined" && this.newState!=""){
       console.log(this.newState);
  		country.states.push({name: this.newState});
  		this.newState = "";
  	}
  }

});
