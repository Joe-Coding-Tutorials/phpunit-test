<?php

include_once dirname(__FILE__, 5) . '/constants.php';

class Route
{

  static $routes = [];

  public static function setRoute($url, $page)
  {
    self::$routes[$url] = $page;
    return $page;
  }


  public static function loadPage($requestUri)
  {
    $fileExists = false;
    $routes = self::$routes;
    foreach ($routes as $location => $page) {
      if ($location === $requestUri) {
        $file = DIR_ROOT . "/app/src/view/pages/" . $page . ".php";
        $fileExists = file_exists($file);
        if ($fileExists) {
          include $file;
        break;
        } 
      }
    }
    if (!$fileExists) {
      echo '404';
      return false;
    } else return true;
  }
}
