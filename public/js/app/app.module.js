// modulo principal con sus respectivas dependencias
(function() {
  'use strict';
  angular.module('materiasApp', [
    // Modulos provenientes de las Librerias.
    'ngMaterial',
    'ngMessages',
    'ngAria',
    'ngRoute',
    'ngAnimate',
    'ngSanitize',

    // Modulos propios.
    'navigationBar',
    'fabMenu',
    'sideNavigation',
    'routes',
    'home',
    'subjects'
  ]).config(['$interpolateProvider', function($interpolateProvider) {
    // Se cambian los simbolos propios de angular para el binding y se pasan de {{}} a [[]].
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
  }]).run(['$rootScope',
    // Se establece el titulo que llevara la pagina en el navegador.
    function($rootScope) {
      $rootScope.title = "Materias";
    }
  ]).config(function($mdThemingProvider) {
    $mdThemingProvider.theme('default')
      .primaryPalette('blue',{'default': '800'})
      .warnPalette('red');
});
})()
