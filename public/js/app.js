'use strict';

var musicApp = angular.module('musicApp', ['ngRoute', 'ngAnimate', 'ui.bootstrap']);

musicApp.config(function ($routeProvider, $locationProvider) {
  $routeProvider.
    when('/', {
      templateUrl: 'js/views/artists.html',
      controller: 'artistController'
    }).
    when('/music/:artist_slug', {
      templateUrl: 'js/views/artist.html',
      controller: 'artistController'
    }).
    otherwise({
      redirectTo: '/'
    });

  $locationProvider.html5Mode(true);

});
