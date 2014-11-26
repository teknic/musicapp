'use strict';

var musicApp = angular.module('musicApp', [
  'ngRoute', 'artistController', 'artistService',
]);

musicApp.config(function ($routeProvider, $locationProvider) {
  $routeProvider.
    when('/', {
      templateUrl: 'js/pages/artists.html',
      controller: 'artistController'
    }).
    otherwise({
      redirectTo: '/'
    });
  $locationProvider.html5Mode(true);
});
