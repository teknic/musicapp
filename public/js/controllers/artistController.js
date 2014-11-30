'use strict';

musicApp.controller('artistController', function($scope, $http, ArtistService) {

    $scope.artists = {};
    $scope.loading = true;
    var page = location.pathname;

    if (page == '/') {
      ArtistService.get().success(
        function($data) {
          $scope.artists = $data;
          $scope.loading = false;
          $scope.pageClass = 'page-artists'
        }
      )
    }
    else {
      var params = page.split('/');
      ArtistService.getBySlug(params[2]).success(
        function($data) {
          $scope.artist = $data;
          $scope.loading = false;
          $scope.pageClass = 'page-artist'
        }
      )
    }

});