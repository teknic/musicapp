'use strict';

musicApp.controller('menuController', function($scope, $modal, SessionService) {

  $scope.user = {
    email: null,
    password: null,
    loggedIn: false
  };

  if (SessionService.get('auth')) {
    $scope.user.loggedIn = true;
  }

  $scope.open = function () {
    $modal.open({
      templateUrl: 'js/views/loginForm.html',
      backdrop: true,
      size: 'sm',
      keyboard: false,
      windowClass: 'modal',
      controller: 'modalController',
      resolve: {
        user: function () {
          return $scope.user;
        }
      }
    });
  };

});