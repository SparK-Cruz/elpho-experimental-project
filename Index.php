<?php
  namespace main;

  session_start();
  define('DEBUG', 1);
  require("../elpho/startup.php");

  //turn on autoloader for current folder;
  loadModule('', 'main');

  use elpho\mvc\Router;
  use elpho\mvc\ErrorController;
  use elpho\di\DependencyInjector;

  use main\providers\NotificationMailerProvider;
  use main\controllers\Home;

  class Index{
    public static final function main($args=array()){
      $di = new DependencyInjector();
      $di->registerProvider("main\\providers\\NotificationMailerProvider");

      $router = Router::getInstance(__DIR__);
      $router->setDependencyInjector($di);

      ErrorController::$e401view = "views/error/e401.html";
      ErrorController::$e404view = "views/error/e404.html";
      ErrorController::$e500view = "views/error/e500.html";

      self::mapRoutes($router);

      $router->serve();
    }

    private static function mapRoutes($router){
      $router->mapFor("main\controllers\Home");
    }
  }