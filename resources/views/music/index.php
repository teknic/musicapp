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
</head>
<body class="container" ng-app="musicApp" style="background:slategrey;">
  <!-- Menu -->
  <header>
    <nav class="navbar navbar-default navbar-static-top" role="navigation" ng-controller="menuController">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img alt="Brand" height="50" width="50"
               ng-src="/storage/icons/music_icon.png" style="margin:-15px 0px 0px -18px;">
        </a>
        <button type="button" class="btn btn-default navbar-btn">Home</button>
        <button type="button" class="btn btn-default navbar-btn">Profile</button>
        <button type="button" class="btn btn-default navbar-btn" ng-click="open();">Login</button>
      </div>
    </nav>
  </header>

  <div class="page {{pageClass}}" id="main" ng-view></div>

  <!-- The login modal -->
  <div class="login" ng-include="loginForm.html"></div>

  <footer>
    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.27/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.27/angular-route.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.27/angular-animate.min.js"></script>
    <!-- Bootstrap and Bootcards JS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootcards/1.0.0/js/bootcards.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap / Angular UI -->
    <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.12.0.min.js"></script>
    <!-- ANGULAR -->
    <script src="js/app.js"></script>
    <script src="js/controllers/artistController.js"></script>
    <script src="js/controllers/menuController.js"></script>
    <script src="js/controllers/modalController.js"></script>
    <script src="js/services/artistService.js"></script>
    <script src="js/services/userService.js"></script>
    <script>
      angular.module("musicApp").constant("CSRF_TOKEN", '<?php echo csrf_token(); ?>');
    </script>
  </footer>
</body>
</html>