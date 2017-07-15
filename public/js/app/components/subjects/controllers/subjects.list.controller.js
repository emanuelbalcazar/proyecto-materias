(function() {
  'use strict';

  angular.module('subjects')
  .controller('subjectsListController', [
    '$scope',
    SubjectsListController
  ]);

  function SubjectsListController(vm) {
    vm.$parent.setTitle('Materias');

    vm.fabMenu = [
      { tooltip: 'Agregar materia', icon: 'add', href: '#/subject/new' }
    ];

    vm.$parent.setFabMenuElements(vm.fabMenu);


    vm.materias = [
      {name: 'Expresion de Problemas y Algoritmos', career: 'Licenciatura en Informatica'},
      {name: 'Algebra', career: 'Licenciatura en Informatica'},
      {name: 'Analisis Matematico', career: 'Licenciatura en Informatica'},
      {name: 'Elementos de informatica', career: 'Licenciatura en Informatica'}
    ];
  }
})()
