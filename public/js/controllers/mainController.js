angular.module('mainController', [])

    // inject the Comment service into our controller
    .controller('mainController', function ($scope, $http, Artist) {
        // object to hold all the data for the new comment form
        $scope.artistDate = {};
        // loading variable to show the spinning loading icon
        $scope.loading = true;

        // get all the artists first and bind it to the $scope.artists object
        // use the function we created in our service
        Artist.get().success(function (data) {
            $scope.artists = data;
            $scope.loading = false;
        });
    });
