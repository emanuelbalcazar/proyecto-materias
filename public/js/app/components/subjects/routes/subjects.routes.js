/* Ruteo general de la aplicacion */
(function () {
  'use strict';
  angular.module('subjects')
  .config(Routing, ['$routeProvider', '$locationProvider', '$windowProvider', 'path', Routing]);

  function Routing($routeProvider, $locationProvider, $windowProvider, path) {
    var $window = $windowProvider.$get(); // Se obtiene $window para poder usar location.
    // Se obtiene la ruta base (siempre descartando index.php si estuviera debido a que no es una carpeta valida).
    var base_route = $window.location.pathname.split('index.php')[0];
    routing();

    function routing(){
      $locationProvider.hashPrefix('');
      $routeProvider
      .when('/subjects', {
        templateUrl: base_route + path.LIST_VIEW,
        controller: 'subjectsListController'
      })
      .when('/subject/new', {
        templateUrl: base_route + path.FORM_VIEW,
        controller: 'subjectsFormController'
      })
    }
  }

})()
