// Constantes utilizadas por el modulo de ruteo. Se deben definir las rutas de los templates por si se usan mas de una vez para que sea mas facil realizar cambios.
(function() {
  'use strict';
  angular.module('subjects')
  .constant('path',{
    LIST_VIEW: 'js/app/components/subjects/views/subjects.list.view.html',
    FORM_VIEW: 'js/app/components/subjects/views/subjects.form.view.html'
  });
})()
