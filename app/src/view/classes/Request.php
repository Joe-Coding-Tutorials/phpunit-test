<?php

class Request {
  
  public $method;
  public $url;

  function __construct($url, $method)
  {
    // Declare the url request
    $this->url = $url;
    // Declare the method
    $this->method = $method;
  }
}