(function() {
  'use strict';

  angular.module('home')
  .controller('homeController', [
    '$scope',
    HomeController
  ]);

  function HomeController(vm) {
    vm.$parent.setTitle('Proyecto Materias');

    vm.fabMenu = [];
    vm.$parent.setFabMenuElements(vm.fabMenu);
  }
})() 
