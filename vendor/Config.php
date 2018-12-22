<?php
/**
 * * Created by PhpStorm.
 * User: Kalys
 * Date: 22.12.18
 * Time: 18:47
 */

class Config
{

  private $config;
  /**
   * Config constructor.
   */
  public function __construct($config)
  {
    $this->config = $config;
  }

  public function get($name)
  {
    return isset($this->config[$name])?$this->config[$name]:null;
  }

  public function getViewDir()
  {
    return $this->get("viewDir");
  }

  public function getBasePath()
  {
    return $this->get("basePath");
  }

}