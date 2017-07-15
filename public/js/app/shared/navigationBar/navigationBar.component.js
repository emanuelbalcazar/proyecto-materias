(function () {
  'use strict';
  angular.module('navigationBar', [])
  // Se define el componente de la barra de navegacion.
  .component('navigation', {
    templateUrl: 'js/app/shared/navigationbar/navigationBar.view.html',
    controller: 'NavController'
  })
})()