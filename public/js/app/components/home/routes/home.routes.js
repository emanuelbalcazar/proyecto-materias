(function () {
+
  'use strict';
  angular.module('home')
  .config(Routing, ['$routeProvider', '$locationProvider', '$windowProvider', 'path', Routing]);

  function Routing($routeProvider, $locationProvider, $windowProvider, path) {
    var $window = $windowProvider.$get(); // Se obtiene $window para poder usar location.
    // Se obtiene la ruta base (siempre descartando index.php si estuviera debido a que no es una carpeta valida).
    var base_route = $window.location.pathname.split('index.php')[0];
    routing();

    function routing(){
      $locationProvider.hashPrefix('');
      $routeProvider
      .when('/home', {
        templateUrl: base_route + path.HOME_VIEW,
        controller: 'homeController'
      })
      .when('/', {
        redirectTo: '/home'
      })
    }
  }

})()
