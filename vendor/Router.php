<?php
/**
 * * Created by PhpStorm.
 * User: Kalys
 * Date: 22.12.18
 * Time: 18:27
 */

class Router
{
  /**
   * @var Application
   */
  private $app;

  private $routes = [
    "GET" => [],
    "POST" => [],
  ];

  public function get($routeName,$func)
  {
    $this->routes['GET'][$routeName] = $func;
  }

  public function post($routeName,$func)
  {
    $this->routes['POST'][$routeName] = $func;
  }

  /**
   * @param mixed $app
   */
  public function setApp(Application $app)
  {
    $this->app = $app;
  }

  public function executeRoute($routeName,$methog)
  {
    if(isset($this->routes[$methog][$routeName])){
      $res = $this->routes[$methog][$routeName]();
      if($res instanceof View){
        $path = $res->getPath();
        $params = $res->getParams();
        $viewDir = $this->app->getConfig()->getViewDir();
        $basePath = $this->app->getConfig()->getBasePath();
        extract($params);
        include $basePath.$viewDir.$path.".php";
      }
    }else{
      echo "Route not found!";
    }
  }
}