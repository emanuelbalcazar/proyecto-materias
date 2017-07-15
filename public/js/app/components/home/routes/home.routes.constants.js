// Constantes utilizadas por el modulo de ruteo. Se deben definir las rutas de los templates por si se usan mas de una vez para que sea mas facil realizar cambios.
(function() { 
  'use strict';
  angular.module('home')
  .constant('path',{
    HOME_VIEW: 'js/app/components/home/views/home.view.html',
  });
})()
