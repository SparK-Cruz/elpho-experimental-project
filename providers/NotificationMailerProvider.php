<?php
  namespace main\providers;

  use elpho\di\DependencyProvider;
  use main\services\NotificationMailer;

  class NotificationMailerProvider implements DependencyProvider{
    private static $instance = null;

    public function getProvidedClassName(){
      return 'NotificationMailer';
    }
    public function getInstance(){
      if(self::$instance == null)
        self::$instance = new NotificationMailer();
      return self::$instance;
    }
  }