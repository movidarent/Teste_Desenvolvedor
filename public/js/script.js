angular.module('alurapic', [ 'ngAnimate', 'ngRoute'])
    .config(function($routeProvider, $locationProvider) {

        $locationProvider.html5Mode(true);

        $routeProvider.when('/fale-conosco', {
            controller: 'EstadosController'
        });

    });