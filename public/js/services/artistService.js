var musicApp = angular.module('artistService', []);

musicApp.factory('Artist', function ($http) {
  return {
    // get all the artists
    get: function () {
      return $http.get('/api/artists');
    },
    getBySlug: function (slug) {
      return $http.get('/api/artist/' + slug);
    }
  }
});