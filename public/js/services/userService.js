'use strict';

musicApp.factory('UserService', function ($http, CSRF_TOKEN) {
  return {
    // get all the artists
    login: function (user) {
      return $http.post('/api/user/login', {_token:CSRF_TOKEN, email:user.email, password:user.password});
    }
  }
});