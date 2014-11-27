<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Music App</title>
  <base href="/">
  <!-- CSS -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootcards CSS for desktop: -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootcards/1.0.0/css/bootcards-desktop.min.css">
  <!-- Local CSS -->
  <link rel="stylesheet" href="/js/css/styles.css">
  <!-- JS -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.27/angular.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.27/angular-route.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.27/angular-animate.min.js"></script>
  <!-- Bootstrap and Bootcards JS -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootcards/1.0.0/js/bootcards.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

  <!-- ANGULAR -->
  <script src="js/app.js"></script>
  <script src="js/controllers/artistController.js"></script>
  <script src="js/services/artistService.js"></script>

</head>
<body class="container" ng-app="musicApp" ng-controller="artistController" style="background:slategrey;">
  <div class="page {{pageClass}} " id="main" ng-view>
  </div>
</body>
</html>