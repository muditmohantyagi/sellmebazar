var mainApp = angular.module("mainApp", ['ngRoute']);
mainApp.config(function($routeProvider) {
    $routeProvider
        .when('/login', {
            templateUrl: 'users/login',
           // controller: 'StudentController'
        })
		.when('/add-posting', {
		templateUrl: 'users/submit_add',
		//controller: 'StudentController'
		})
		.when('/registration', {
		templateUrl: 'users/registration',
		//controller: 'StudentController'
		})
		.when('/', {
		templateUrl: 'users/index',
		//controller: 'StudentController'
		})
    /*     .otherwise({
            redirectTo: '/'
        }) */;
});