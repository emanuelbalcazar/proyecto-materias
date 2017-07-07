<!DOCTYPE html>
<html ng-app='materiasApp'>
  <head>
    <title>[[title]]</title>

    <!-- Styles -->

    <!-- Estilos externos -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('js/assets/libs/bower_components/angular-material/angular-material.min.css') }}">


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

    <script src="{{ URL::asset('js/app/app.module.js') }}"></script>

  </head>
  <body>
    <div class="" ng-view=""></div>
  </body>
</html>
