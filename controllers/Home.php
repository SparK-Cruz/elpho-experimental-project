<?php
  namespace main\controllers;

  use elpho\mvc\Controller;
  use elpho\mvc\View;

  class Home extends Controller{
    /**
    * @route()
    * @route(home)
    */
    public static final function index($args){
      $view = new View("views/home/index.html.php");
      $view->render();
    }

    /**
    * @route(contact)
    */
    public static final function contact($args){
      $view = new View("views/home/contact.html.php");
      $view->resultMessage = "";
      $view->render();
    }

    /**
    * @route(contact, post)
    */
    public static final function sendEmail($args, $notificationMailer){
      self::allowMethods("post");

      $view = new View("views/home/contact.html.php");
      $view->resultMessage = $notificationMailer->contact($args);
      $view->render();
    }
  }
