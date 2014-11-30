'use strict';

musicApp.controller('modalController', function ($scope, $modalInstance, user, UserService) {

  $scope.user = user;
  $scope.submit = function () {
    // get all the artists
    UserService.login($scope.user).success(
      function($data) {
        if ($data.valid == true) {
          $scope.user.loggedIn = true;
        }
      }
    );
    $modalInstance.dismiss('cancel');
  };
  $scope.cancel = function () {
    $modalInstance.dismiss('cancel');
  };
});