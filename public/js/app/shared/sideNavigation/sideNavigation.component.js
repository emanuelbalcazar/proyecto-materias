(function () {
	'use strict';
	angular.module('sideNavigation', [])
	// Se define el componente del panel lateral.
	.component('side', {
		templateUrl: 'js/app/shared/sideNavigation/sideNavigation.view.html',
		controller: 'sideNavigationController'
	})
})()
