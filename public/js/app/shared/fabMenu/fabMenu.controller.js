(function() {
  'use strict';

  angular.module('fabMenu')
  .controller('fabMenuController', ['$scope', fabMenuController]);
  /*
  * Establece el manejo del menu emergente.
  */
  function fabMenuController(vm) {
    // Se establece que su comportamiento sera escalado.
    vm.selectedMode = 'md-scale';
    // Se controla la apertura del menu.
    vm.isOpen = false;
    // Se establece la direccion hacia donde se despliegan las opciones.
    vm.selectedDirection = 'up';
  }
})()
