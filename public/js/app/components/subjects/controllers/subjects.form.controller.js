(function() {
  'use strict';

  angular.module('subjects')
  .controller('subjectsFormController', [
    '$scope',
    'SubjectsService',
    SubjectsFormController
  ]);

  function SubjectsFormController(vm, service) {
    vm.$parent.setTitle('Nueva materia');
    vm.$parent.setFabMenuElements([]);

    // Datos: code, name, total_hours, period, quarter, year, promotion, final
    vm.subject = {
      code : '',
      name : '',
      total_hours : 0,
      career : '',
      period : 'anual',
      quarter : 0,
      year : 1,
      promotion : false,
      final : false,
      correlativas: []
    }

    vm.careers = [
      'Licenciatura en Informatica',
      'Analista Programador Universitario',
      'Abogacia',
      'Biologia',
      'Licenciatura en Turismo',
      'Contabilidad'
    ];

    vm.subjects = [
      {name: 'Expresion de Problemas y Algoritmos'},
      {name: 'Algebra'},
      {name: 'Analisis Matematico'},
      {name: 'Elementos de informatica'}
    ];

    vm.searchCareer = function(textToSearch){
      vm.results = [];
      vm.careers.forEach(function(item){
        if(item.toUpperCase().includes(textToSearch.toUpperCase())){
          vm.results.push(item);
        }
      })
      return vm.results;
    };

    vm.searchSubject = function(textToSearch){
      vm.results = [];
      vm.subjects.forEach(function(item){
        if(item.name.toUpperCase().includes(textToSearch.toUpperCase())){
          vm.results.push(item);
        }
      })
      return vm.results;
    };

    vm.searchCareerText = '';
    vm.selectedSubject = '';
    vm.searchSubjectText = '';
    vm.isSelected = false;

    vm.addCorrelativa = function(subject){
      if(!vm.subject.correlativas.includes(subject)){
        vm.subject.correlativas.push(subject);
        vm.selectedSubject = '';
        vm.searchSubjectText = '';
        vm.isSelected = false;
      }
      else{
        console.log("La materia ya esta contenida!");
      }
    }

    vm.changeSelection = function(){
      if(vm.subjects.includes(vm.selectedSubject)){
        vm.isSelected = true;
      }
    }

    vm.removeCorrelativa = function(position){
      vm.subject.correlativas.splice(position,1);
    }
  }
})()
