(function() {
  'use strict';

  angular.module('sideNavigation')
  .controller('sideNavigationController', ['$scope', '$mdSidenav', sideNavigationController]);

  function sideNavigationController(vm, $mdSidenav) {
    // Se muestra / oculta el panel lateral con id 'left'.
    vm.toggleNav = function() {
      $mdSidenav('left').toggle();
    }

    // Se escucha el evento llamado toggleLeft para mostrar/ocultar el panel lateral.
    vm.$on('toggleLeft', function(e) {
      vm.toggleNav();
    });
  }
})()
