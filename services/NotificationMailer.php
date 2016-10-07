<?php
  namespace main\services;

  class NotificationMailer{
    public function contact($args){
      //PRETEND WE SENT SOMETHING
      return $args->name;
    }
  }