// modulo principal con sus respectivas dependencias
(function() {
    'use strict';
    angular.module('materiasApp', [
      'ngMaterial'
    ]).config(['$interpolateProvider', function($interpolateProvider) {
        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
    }]).run(['$rootScope',
        function($rootScope) {
            $rootScope.title = "Materias";
        }
    ])
})()
