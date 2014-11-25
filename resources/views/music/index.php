<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Music App</title>
  <!-- CSS -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- JS -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- ANGULAR -->
  <!-- all angular resources will be loaded from the /public folder -->
  <script src="js/controllers/mainController.js"></script> <!-- load our controller -->
  <script src="js/services/artistService.js"></script> <!-- load our service -->
  <script src="js/app.js"></script> <!-- load our application -->

</head>
<body class="container" ng-app="musicApp" ng-controller="mainController">
The Start of Angular

<!-- show loading icon if the loading variable is set to true -->
<p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

<!-- hide these comments if the loading variable is true -->
<div class="artists" ng-hide="loading" ng-repeat="artist in artists">
  <h3>{{ artist.name }}</h3>
</div>

</body>
</html>