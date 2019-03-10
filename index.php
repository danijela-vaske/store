<!DOCTYPE html>
<html>
	<head>
		<title>WebStoreApp</title>
		<link rel="stylesheet" href="https://maxcnd.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<br>
		<h3>WebStore</h3>
		<br>
		<hr>
		<div class="container" ng-app="shoppingCart" ng-controller="shoppingCartController">
			<div class="row">
				<div class=" col-md-3" ng-repeat = "product in products">
					<div style="border:1px solid #333;
						background-color: #f1f1f1;
						border-radius: 5px;
						padding: 16px;
						height: 350px;"align="center">
						<img ng-src="images/{{product.image}}" class="img-responsive">
						<br>
					</div>
				</div>
			</div>

		</div>
	</body>
</html>

<script >
	var app = angular.module('shoppingCart', []);

	app.controller('shoppingCartController', function($http,$scope){
		$scope.loadProduct = function(){
			$http.get('fetch.php').success(function(data){
				$scope.products = data;
			});
		};
	});
</script>