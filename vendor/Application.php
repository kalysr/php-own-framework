<?php
/**
 * * Created by PhpStorm.
 * User: Kalys
 * Date: 22.12.18
 * Time: 18:30
 */

class Application
{

  private $router;
  private $config;
  /**
   * Application constructor.
   */
  public function __construct(Router $router,Config $config) {
    $this->router = $router;
    $this->config = $config;
    $this->router->setApp($this);
  }

  /**
   * @return Router
   */
  public function getRouter()
  {
    return $this->router;
  }

  /**
   * @return Config
   */
  public function getConfig()
  {
    return $this->config;
  }



  public function run()
  {
    $request_uri = $_SERVER['REQUEST_URI'];
    $request_uri = explode('?',$request_uri);
    $request_uri = $request_uri[0];
    $this->router->executeRoute($request_uri,$_SERVER['REQUEST_METHOD']);
  }
}