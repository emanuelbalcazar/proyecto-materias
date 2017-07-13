(function() {
  'use strict';

  angular.module('materiasApp')
  .controller('sharedController', ['$scope','$mdSidenav', sharedController]);
  /*
  * La utilidad del controlador compartido es el compartir el estado de la aplicacion y otras variables entre modulos.
  * Por ejemplo: Estando en la lista de materias, si uno quisiera ajustar el titulo del la barra de navegacion no podria.
  * Por lo que deberia acceder al controlador compartido y cambiar el titulo ahi mismo lo que refrescaria la barra de navegacion
  * la cual obtiene el titulo de este controlador.
  */
  function sharedController(vm, $mdSidenav) {
    // Titulo de la barra de navegacion.
    vm.title = 'Proyecto Materias';

    // Funcion de apertura y cierre del panel lateral.
    vm.toggleLeft = function(){
      // Se transmite un mensaje para ser captado por el controlador y que ejecute la funcion que abrira o cerrara el panel lateral.
      vm.$broadcast ('toggleLeft');
    };

    // Se usa para establecer el titulo.
    vm.setTitle = function(newTitle){
      vm.title = newTitle;
    }

    // Elementos que componen el menu emergente. Para definir un elemento se usan los siguientes campos:
    //   {
    //     tooltip : <Texto a ser mostrado en el tooltip del boton>,
    //     icon : <Nombre del icono que se le pondra al boton>,
    //     href : <Direccion hacia la que se navegara utilizando el boton>
    //   }
    vm.fabMenuElements = [];

    // Se carga el contenido del menu emergente.
    vm.setFabMenuElements = function(elements){
      vm.fabMenuElements = [];
      elements.forEach(function(item){
        vm.fabMenuElements.push(item);
      });
    }
  }
})()
