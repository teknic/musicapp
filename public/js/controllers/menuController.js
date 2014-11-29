'use strict';

musicApp.controller('menuController', function($scope, $modal) {

  $scope.user = {
    email: null,
    password: null
  };

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