(function () {
	'use strict';
	angular.module('fabMenu', [])
	// Se define el menu emergente como componente.
	.component('fabmenu', {
		templateUrl: 'js/app/shared/fabMenu/fabMenu.view.html',
		controller: 'fabMenuController'
	})
})()
