'use strict';

var musicApp = angular.module('artistController', []);

musicApp.controller('artistController', function($scope, $http, Artist) {
    $scope.artists = {};
    $scope.loading = true;

    Artist.get().success(
        function($data) {
            $scope.artists = $data;
            $scope.loading = false;
        }
    )
});