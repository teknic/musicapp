'use strict';

musicApp.controller('modalController', function ($scope, $modalInstance, user) {

  $scope.user = user;
  $scope.submit = function () {
    $modalInstance.dismiss('cancel');
  }
  $scope.cancel = function () {
    $modalInstance.dismiss('cancel');
  };
});