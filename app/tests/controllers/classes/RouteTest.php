<?php

use PHPUnit\Framework\TestCase;

class RouteTest extends TestCase
{

  public function testRoutingIsWorking(): void
  {
    // Check if routes are added
    Route::setRoute("/", "home");
    $routes = Route::$routes;
    $this->assertTrue(count($routes) > 0, "Routes could not be added " . count($routes));

    // Check if pages can be loaded
    $pageIsShown = Route::loadPage("/");
    $this->assertTrue($pageIsShown, "Page failed to show");
  }
}
