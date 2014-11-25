angular.module('artistService', [])
    .factory('Artist', function($http) {
        return {
            // get all the artists
            get : function() {
                return $http.get('/api/artists');
            }
        }
    });