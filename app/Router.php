<?php

class Router
{
  private $routes = [];

  public function addRoute($method, $path, $handler)
  {
    $this->routes[] = [
      'method' => $method,
      'path' => $path,
      'handler' => $handler,
    ];
  }

  public function handleRequest($method, $path)
  {
    foreach ($this->routes as $route) {
      if ($route['method'] === $method && $route['path'] === $path) {
        $handler = $route['handler'];
        if (is_callable($handler)) {
          $handler();
          return;
        }
        // Handle controller method
        list($controller, $method) = explode('@', $handler);
        $this->invokeControllerMethod($controller, $method);
        return;
      }
    }

    // No route found
    echo '404 Not Found';
  }

  private function invokeControllerMethod($controller, $method)
  {
    require_once __DIR__ . '/controllers/' . $controller . '.php';
    $controllerInstance = new $controller();
    if (method_exists($controllerInstance, $method)) {
      $controllerInstance->$method();
    } else {
      echo '404 Not Found';
    }
  }
}
