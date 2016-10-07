<?php
  namespace main\providers;

  use elpho\di\DependencyProvider;
  use main\services\NotificationMailer;

  class NotificationMailerProvider implements DependencyProvider{
    private static $instance = null;

    public static function getProvidedClassName(){
      return 'NotificationMailer';
    }
    public static function getInstance(){
      if(self::$instance == null)
        self::$instance = new NotificationMailer();
      return self::$instance;
    }
  }