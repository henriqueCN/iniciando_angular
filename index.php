<!DOCTYPE html>
<html ng-app="helloworld">
<head>
	<title>Hello World</title>
		<script src="angular/angular.js"></script>
	<script>
	 angular.module("helloworld", []);
	 angular.module("helloworld").controller("helloworldctrl", function ($scope){
	 	$scope.message = "Hello World!";
	 });	
	</script>
</head>
<body>
	<div ng-controller="helloworldctrl">
		{{message}}
		
	</div>
		

</body>
</html>