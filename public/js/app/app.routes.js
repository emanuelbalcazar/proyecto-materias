/* Ruteo general de la aplicacion */
(function () {
  'use strict';
  angular.module('routes')
  .config(Routing, ['$routeProvider', '$locationProvider', '$windowProvider', 'path', Routing]);

  function Routing($routeProvider, $locationProvider, $windowProvider, path) {
    var $window = $windowProvider.$get(); // Se obtiene $window para poder usar location.
    // Se obtiene la ruta base (siempre descartando index.php si estuviera debido a que no es una carpeta valida).
    var base_route = $window.location.pathname.split('index.php')[0];
    routing();

    function routing(){
      $locationProvider.hashPrefix('');
      $routeProvider
      .when('/404', {
        templateUrl: base_route + path.ERROR_VIEW
      })
      .otherwise({
        redirectTo: '/404'
      });
    }
  }

})()
