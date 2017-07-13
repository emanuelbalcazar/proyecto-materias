<!DOCTYPE html>
<html ng-app='materiasApp'>
<head>
  <title>[[title]]</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Styles -->

  <!-- Icono -->
  <link rel="icon" type="image/x-icon" href="{{ URL::asset('favicon.png') }}">

  <!-- Estilos externos -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('js/assets/libs/bower_components/angular-material/angular-material.min.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Scripts -->
  <!-- Librerias externas -->
  <!-- AngularJS -->
  <script src="{{ URL::asset('js/assets/libs/bower_components/angular/angular.min.js') }}"></script>
  <script src="{{ URL::asset('js/assets/libs/bower_components/angular-route/angular-route.min.js') }}"></script>
  <script src="{{ URL::asset('js/assets/libs/bower_components/angular-material/angular-material.min.js') }}"></script>
  <script src="{{ URL::asset('js/assets/libs/bower_components/angular-animate/angular-animate.min.js') }}"></script>
  <script src="{{ URL::asset('js/assets/libs/bower_components/angular-aria/angular-aria.min.js') }}"></script>
  <script src="{{ URL::asset('js/assets/libs/bower_components/angular-messages/angular-messages.min.js') }}"></script>
  <script src="{{ URL::asset('js/assets/libs/bower_components/angular-sanitize/angular-sanitize.min.js') }}"></script>

  <!-- Propias -->
  <!-- Definicion de la aplicacion -->
  <script src="{{ URL::asset('js/app/app.module.js') }}"></script>
  <!-- Ruteo -->
  <script src="{{ URL::asset('js/app/app.routes.module.js') }}"></script>
  <script src="{{ URL::asset('js/app/app.routes.js') }}"></script>
  <script src="{{ URL::asset('js/app/app.routes.constants.js') }}"></script>
  <!-- Controlador compartido -->
  <script src="{{ URL::asset('js/app/app.shared.controller.js') }}"></script>
  <!-- Barra de navegacion -->
  <script src="{{ URL::asset('js/app/shared/navigationBar/navigationBarComponent.js') }}"></script>
  <script src="{{ URL::asset('js/app/shared/navigationBar/navigationBarController.js') }}"></script>
  <!-- Menu emergente -->
  <script src="{{ URL::asset('js/app/shared/fabMenu/fabMenuComponent.js') }}"></script>
  <script src="{{ URL::asset('js/app/shared/fabMenu/fabMenuController.js') }}"></script>
  <!-- Panel lateral de navegacion -->
  <script src="{{ URL::asset('js/app/shared/sideNavigation/sideNavigationComponent.js') }}"></script>
  <script src="{{ URL::asset('js/app/shared/sideNavigation/sideNavigationController.js') }}"></script>

</head>
<body>
  <!-- Se establece el controlador compartido como controlador padre de la aplicacion -->
  <div ng-controller="sharedController">
    <!-- Inclusion de la barra de navegacion -->
    <navigation></navigation>
    <div class="" ng-view=""></div>
    <!-- Inclusion del menu emergente -->
    <fabMenu></fabMenu>
    <!-- Inclusion del panel lateral -->
    <side></side>
  </div>
</body>
</html>
