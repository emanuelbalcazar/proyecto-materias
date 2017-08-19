(function () {
	'use strict';

	angular.module('subjects')
		.factory('SubjectsService', ['$http', function($http){
			return {
				findAll: function(callback){
					$http
						.get('api/subjects')
						.then(
							function(res){
								return callback(false, res.data)
							},
							function(err){
								return callback(err.data)
							}
						)
				}
			}
	}])
})()
