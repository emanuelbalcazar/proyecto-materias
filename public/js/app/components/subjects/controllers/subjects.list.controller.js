(function() {
  'use strict';

  angular.module('subjects')
  .controller('subjectsListController', [
    '$scope',
    '$mdDialog',
    'SubjectsService',
    SubjectsListController
  ]);

  function SubjectsListController(vm, $mdDialog, service) {
    vm.$parent.setTitle('Materias');

    vm.fabMenu = [
      { tooltip: 'Agregar materia', icon: 'add', href: '#/subject/new' }
    ];

    vm.$parent.setFabMenuElements(vm.fabMenu);

    vm.findAll = function(){
      service.findAll(function(err, res){
        if(err){
          return alert('Ocurrió un error buscando las carpetas: ' + err)
        }
        vm.subjects = res;
      });
    }

    vm.findAll();
    vm.subjects = [];

    vm.materias = [
      {name: 'Expresion de Problemas y Algoritmos', career: 'Licenciatura en Informatica'},
      {name: 'Algebra', career: 'Licenciatura en Informatica'},
      {name: 'Analisis Matematico', career: 'Licenciatura en Informatica'},
      {name: 'Elementos de informatica', career: 'Licenciatura en Informatica'}
    ];

    vm.confirmDelete = function(ev) {
      var confirm = $mdDialog.confirm()
          .title('Eliminar')
          .textContent('Esta seguro que desea eliminar la materia seleccionada?')
          .targetEvent(ev)
          .ok('Si')
          .cancel('No');

      $mdDialog.show(confirm).then(function() {
        // Acciones si pulso que si.
        console.log("Borrado de una materia: Usted ha confirmado el borrado de la materia.")
      }, function() {
        // Acciones si pulso que no.
        console.log("Borrado de una materia: Usted ha denegado el borrado de la materia.")
      });
    };
  }
})()
